<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto+Condensed:700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bundle.css?ver=5">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	( function() {
    var x = new Date().valueOf();
    var now = x.toString().slice(-10);
    var later = (x + 30000).toString().slice(-10);
    var uSplit = window.location.href.toString().split('?');

    if(uSplit.length > 1){
        var oldNum = uSplit[1].slice(2);
        var oldDate = parseInt(x.toString().replace(now, oldNum));
        var diff = oldNum - now;
    } else { 
        var diff = 0; 
    }

    if(diff <= 0){ 
        var newURL = uSplit[0] + "?v=" + later; 
        window.location.replace(newURL);
    } else { 
        return false; 
    }
    return false;
}());
</script>