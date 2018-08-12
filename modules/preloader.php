<div class="preloader">
	<img src="../assets/img/preloaderBG.jpg" alt="" class="preloader__BG">
	<img src="../assets/img/preloader.svg" alt="" class="preloader__logo">
</div>
<script>
	var t1 = performance.now();
</script>
<style>
.preloader__BG{
	display: none;
}
	.preloader {
    height: 100vh;
    width: 100vw;
    position: fixed;
    z-index: 999999;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(/assets/img/preloaderBG.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    opacity: 1;
    transition: 0.3s;
    animation: hidePreloader 0.3s forwards;
    animation-delay: 10s;
	}
	

.preloader__logo {
    width: 50em;
    max-width: 90%;
 
}
.preloader__runAnimationNow{
    animation: hidePreloader 0.3s forwards;
    opacity: 0;
}
@keyframes hidePreloader {
    0% {
       
    }
    99% {
       
    }
    
    100% {
        
        z-index: -444444444444;
    }
}

</style>