<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<script type="text/javascript" src="js/easing.js"></script>

<script src="js/jquery.wmuSlider.js"></script> 
<script>
    $('.example1').wmuSlider();
</script>
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(function () {
        $('#activator').click(function () {
            $('#box').animate({'top': '0px'}, 500);
        });
        $('#boxclose').click(function () {
            $('#box').animate({'top': '-700px'}, 500);
        });
    });
    $(document).ready(function () {
        //Hide (Collapse) the toggle containers on load
        $(".toggle_container").hide();
        //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
        $(".trigger").click(function () {
            $(this).toggleClass("active").next().slideToggle("slow");
            return false; //Prevent the browser jump to the link anchor
        });
    });
</script>
<script type="text/javascript" src="js/circles.js"></script>
<script>
    var colors = [
        ['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa']
    ];
    for (var i = 1; i <= 6; i++) {
        var child = document.getElementById('circles-' + i),
                percentage = 50 + (i * 10);

        Circles.create({
            id: child.id,
            percentage: percentage,
            radius: 80,
            width: 15,
            number: percentage / 10,
            text: '%',
            colors: colors[i - 1]
        });
    }

</script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>