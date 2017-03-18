<footer class="page-footer red">
    <div class="footer-copyright">
        <div class="container center">
            <p>© Mattumagala Sacred Heart Parish Meadia Committee. Design & Maintained by Mahendra Karanduwawala</p>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="../dist/js/jquery-2.1.1.min.js"></script>
<script src="../dist/js/materialize.js"></script>
<script src="../dist/js/init.js"></script>
<script src="../dist/js/script.js"></script>
<script src="../dist/lightbox/js/lightbox.js"></script>
<script>
    $(document).ready(function () {
        $(window).resize(function () {
            var bodyheight = $(this).height();
            var menu = $('.navbar-fixed').height();
            var footer = $('.page-footer').height();
            var container = $('.news').height();

            console.log(bodyheight);
            console.log(menu);
            console.log(footer);
//            console.log(container);
            container = bodyheight - (menu + footer + 20);
            $('.admin-nav').height(container);
        }).resize();

//        $('.button-collapse').sideNav('show');
    });


</script>