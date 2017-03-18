<footer class="page-footer red">
    <!-- <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <div class="footer-copyright">
        <div class="container center">
            <p>© Mattumagala Sacred Heart Parish Meadia Committee. Design & Maintained by Mahendra Karanduwawala</p>
        </div>
    </div>
    s
</footer>


<!--  Scripts-->
<script src="./dist/js/jquery-2.1.1.min.js"></script>
<script src="./dist/js/materialize.js"></script>
<script src="./dist/js/init.js"></script>
<script src="./dist/js/script.js"></script>
<script src="./dist/lightbox/js/lightbox.js"></script>
<script>
    $(document).ready(function () {
        if ($(this).hasClass('.carousel'))
            $('.carousel').carousel();

        $(window).resize(function () {
            var bodyheight = $(this).height();
            var menu = $('.navbar-fixed').height();
            var footer = $('.page-footer').height();
            var container = $('.container').height();

            console.log(bodyheight);
            console.log(menu);
            console.log(footer);
            console.log(container);
            container = bodyheight - (menu + footer + 50);
            $('.container').height(container);
//              var idheader = $(".header-front-page").height();
//              var idheaderbb = $("#header-bottom-boxes").height();
//              var hh = bodyheight-(idheader+idheaderbb);
//              console.log('window height:'+ bodyheight+ ' id-header : '+ idheader+ ' header-bottom-boxes : ' + idheaderbb);
//              console.log(hh);
//              console.log(idheader+hh);
//              $(".header-front-page").height(idheader+hh);
        }).resize();
    });


</script>