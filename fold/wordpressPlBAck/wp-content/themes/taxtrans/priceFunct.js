                $('document').ready(function() {

                    var odincovoTableHeight = $("#odincovoHighlight").height();
                    var stateTableHeight = $("#stateHighlight").height();

                    var controller = new ScrollMagic.Controller();

                    new ScrollMagic.Scene({ triggerElement: "#odincovoHighlight", duration: odincovoTableHeight })
                        .setClassToggle(".odincovoSelector", "selected") // add class toggle
                      
                        .addTo(controller);
                    new ScrollMagic.Scene({ triggerElement: "#stateHighlight", duration: stateTableHeight })
                        .setClassToggle(".stateSelector", "selected") // add class toggle
                      
                        .addTo(controller);




                    $('#odincovoAllTable td').hide();
                    $('#odincovoAllTable td:nth-child(1)').show();
                    $('#odincovoAllTable td:nth-child(2)').show();
                    var price;
                    var place;
                    var placeSecond = "Из Одинцово";
                    $("input:radio[name=driveType]").click(function() {
                        $('.oplataDivPrice').addClass('animated fadeOutRight');
                        var inputValue = $("input:radio[name=driveType]:checked").val();


                        switch (inputValue) {
                            case 'from':
                                $('#odincovoAllTable td').hide();
                                $('#odincovoAllTable td:nth-child(1)').show();
                                $('#odincovoAllTable td:nth-child(2)').show();
                                var placeSecond = "Из Одинцово";
                                break;
                            case 'to':
                                $('#odincovoAllTable td').hide();
                                $('#odincovoAllTable td:nth-child(1)').show();
                                $('#odincovoAllTable td:nth-child(3)').show();
                                var placeSecond = "в Одинцово";
                                break;
                            case 'fromTo':
                                $('#odincovoAllTable td').hide();
                                $('#odincovoAllTable td:nth-child(1)').show();
                                $('#odincovoAllTable td:nth-child(4)').show();
                                var placeSecond = "Туда и обратно";
                                break;
                        };
                    });

                    var tableFirstElem = jQuery('.firstWidth');



                    $('td').click(function() {

                        price = $(this).text().trim();
                        place = $(this).siblings("td").eq(0).text().trim();
                        $("input[name='WMI_PAYMENT_AMOUNT']").attr('value', price);

                        if (isNaN(price)) {

                        } else {
                            if (price.trim() != '') {

                                if ($('#fromAll').is(':checked')) {
                                    $('#enteredAddress1Label').html('Из Одинцово,');
                                    $('#enteredAddress2Label').html('В ' + place + ',');
                                    $('.oplataPrice').html(price);
                                    $('.oplataDivPrice').removeClass('fadeOutRight')
                                    $('.oplataDivPrice').addClass('animated fadeInRight')
                                    $('.oplataDivPrice').show();
                                } else if ($('#toAll').is(':checked')) {
                                    $('#enteredAddress1Label').html('Из ' + place + ',');
                                    $('#enteredAddress2Label').html('В Одинцово,');
                                    $('.oplataPrice').html(price);
                                    $('.oplataDivPrice').removeClass('fadeOutRight')
                                    $('.oplataDivPrice').addClass('animated fadeInRight')
                                    $('.oplataDivPrice').show();
                                } else {
                                    $('#oplataFromInput').val('Из Одинцово');
                                    $('#oplataToInput').val('В ' + place);
                                    $('.oplataPrice').html(price);
                                    $('.oplataDivPrice').removeClass('fadeOutRight')
                                    $('.oplataDivPrice').addClass('animated fadeInRight')
                                    $('.oplataDivPrice').show();
                                };
                            };
                        };
                    });
                    $('.closeIconPrice').click(function() {
                        $('.oplataDivPrice').addClass('animated fadeOutRight');
                    });

                    new ResizeSensor(tableFirstElem, function() {
                        var tableFirstElemW = tableFirstElem.width();
                        $('.carClassDesc').css("width", tableFirstElemW)
                    });
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    var btn = document.getElementById("calcButton");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on the button, open the modal 
                    btn.onclick = function() {
                        modal.style.display = "block";

                        if ($('.oplataDivPrice').hasClass('fadeInRight')) {
                            $('.oplataDivPrice').removeClass('fadeInRight');
                            $('.oplataDivPrice').addClass('fadeOutRight');
                        }
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }


                });

                function init() {
                    var myMap = new ymaps.Map('map', {
                            center: [55.4521, 37.3704],
                            zoom: 10,
                            type: 'yandex#map',
                            behaviors: ['scrollZoom', 'drag'],
                            controls: []
                        }),
                        searchStartPoint = new ymaps.control.SearchControl({
                            options: {
                                useMapBounds: true,
                                noPlacemark: true,
                                noPopup: true,
                                placeholderContent: 'Откуда',
                                size: 'large',


                            }
                        }),
                        searchFinishPoint = new ymaps.control.SearchControl({
                            options: {
                                useMapBounds: true,
                                noCentering: true,
                                noPopup: true,
                                noPlacemark: true,
                                placeholderContent: 'Куда',
                                size: 'large',
                                float: 'none',
                                position: { left: 10, top: 44 }
                            }
                        }),
                        calculator = new DeliveryCalculator(myMap, myMap.getCenter());

                    myMap.controls.add(searchStartPoint);
                    myMap.controls.add(searchFinishPoint);

                    searchStartPoint.events.add('resultselect', function(e) {
                            var results = searchStartPoint.getResultsArray(),
                                selected = e.get('index'),
                                point = results[selected].geometry.getCoordinates(),
                                point1 = searchStartPoint.getRequestString();

                            $("input[name='fromGeo']").attr('value', point);
                            $("input[name='fromNorm']").attr('value', point1);

                            calculator.setStartPoint(point);
                        })
                        .add('load', function(event) {
                            // По полю skip определяем, что это не дозагрузка данных.
                            // По getRusultsCount определяем, что есть хотя бы 1 результат.
                            if (!event.get('skip') && searchStartPoint.getResultsCount()) {
                                searchStartPoint.showResult(0);
                            }
                        });

                    searchFinishPoint.events.add('resultselect', function(e) {
                            var results = searchFinishPoint.getResultsArray(),
                                selected = e.get('index'),
                                point = results[selected].geometry.getCoordinates();
                            point1 = searchFinishPoint.getRequestString();

                            $("input[name='toGeo']").attr('value', point);
                            $("input[name='toNorm']").attr('value', point1);

                            calculator.setFinishPoint(point);
                        })
                        .add('load', function(event) {
                            // По полю skip определяем, что это не дозагрузка данных.
                            // По getRusultsCount определяем, что есть хотя бы 1 результат.
                            if (!event.get('skip') && searchFinishPoint.getResultsCount()) {
                                searchFinishPoint.showResult(0);
                            }
                        });
                }

                function DeliveryCalculator(map, finish) {
                    this._map = map;
                    this._start = null;
                    this._route = null;

                    map.events.add('click', this._onClick, this);
                }

                var ptp = DeliveryCalculator.prototype;

                ptp._onClick = function(e) {
                    if (this._start) {
                        this.setFinishPoint(e.get('coords'));
                    } else {
                        this.setStartPoint(e.get('coords'));
                    }
                };

                ptp._onDragEnd = function(e) {
                    this.getDirection();
                }

                ptp.getDirection = function() {
                    if (this._route) {
                        this._map.geoObjects.remove(this._route);
                    }

                    if (this._start && this._finish) {
                        var self = this,
                            start = this._start.geometry.getCoordinates(),
                            finish = this._finish.geometry.getCoordinates();

                        ymaps.geocode(start, { results: 1 })
                            .then(function(geocode) {
                                var address = geocode.geoObjects.get(0) &&
                                    geocode.geoObjects.get(0).properties.get('balloonContentBody') || '';

                                ymaps.route([start, finish])
                                    .then(function(router) {
                                        var distance = Math.round(router.getLength() / 1000),
                                            message = '<span>Distance: ' + distance + 'км.</span><br/>' +
                                            '<span style="font-weight: bold; font-style: italic">cost of delivery: %sр.</span>';

                                        self._route = router.getPaths();

                                        self._route.options.set({ strokeWidth: 5, strokeColor: '0000ffff', opacity: 0.5 });
                                        self._map.geoObjects.add(self._route);
                                        self._start.properties.set('balloonContentBody', address + message.replace('%s', self.calculate(distance)));

                                    });
                            });
                        self._map.setBounds(self._map.geoObjects.getBounds())
                    }
                };

                ptp.setStartPoint = function(position) {
                    if (this._start) {
                        this._start.geometry.setCoordinates(position);
                    } else {
                        this._start = new ymaps.Placemark(position, { iconContent: 'а' });
                        this._start.events.add('dragend', this._onDragEnd, this);
                        this._map.geoObjects.add(this._start);
                    }
                    if (this._finish) {
                        this.getDirection();
                    }
                };

                ptp.setFinishPoint = function(position) {
                    if (this._finish) {
                        this._finish.geometry.setCoordinates(position);
                    } else {
                        this._finish = new ymaps.Placemark(position, { iconContent: 'б' });
                        this._finish.events.add('dragend', this._onDragEnd, this);
                        this._map.geoObjects.add(this._finish);
                    }
                    if (this._start) {
                        this.getDirection();
                    }
                };



                ptp.calculate = function(len) {
                    // Константы.
                    var KM_TARIF = 30,
                        MINIMUM_COST = 0
                    tripPrice = len * KM_TARIF;

                    $('.oplataCalc').html(len * KM_TARIF);
                    $('.lenCalcDisplay').html(len);
                    $('.priceCalcDisplay').html(len * KM_TARIF);

                    $('.oplataCalc').html(len * KM_TARIF);
                    $("input[name='WMI_PAYMENT_AMOUNT']").attr('value', tripPrice);
                    $("input[name='len']").attr('value', len);


                    $('.calcToDo').hide();
                    $('.calcDisplay').show();;
                    return Math.max(len * DELIVERY_TARIF, MINIMUM_COST);
                };

                ymaps.ready(init);

                function myFunction(searchName, tableName) {
                    // Declare variables 
                    var input, filter, table, tr, td, i;
                    var visible = $('#odincovoAllTable td:visible').length;
                    input = document.getElementById(searchName);
                    filter = input.value.toUpperCase();
                    table = document.getElementById(tableName);
                    tr = table.getElementsByTagName("tr");


                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                    var visible = $('#odincovoAllTable td:visible').length;
                    if (visible === 0) {
                        $('#calcButton').show();
                    } else {
                        $('#calcButton').hide();
                    };
                }