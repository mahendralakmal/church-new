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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="../dist/js/init.js"></script>
<script src="../dist/js/script.js"></script>
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
            container = bodyheight - (menu + footer + 40);
            $('.admin-nav').height(container);
        }).resize();
    });

    $('.login').css({
        'position' : 'absolute',
        'top' : '50%',
        'margin-top' : -$('.login').outerHeight()/2
    });

    $( "#registerform" ).validate({
        rules: {
            first_name: {
                required:true,
                minlength: 3
            },
            last_name: {
                required:true,
                minlength: 3
            },
            email: "required",
            password: {
                required: true,
                minlength: 6
            },
            password_again: {
                equalTo: "#password"
            }
        }
    });

</script>