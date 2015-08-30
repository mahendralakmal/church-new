<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link href="./dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="navbar-fixed red" role="navigation">
    <div class="nav-wrapper container-fluid">
      <a id="logo-container" href="#" class="brand-logo"><img src='./dist/images/Mattumagala-Jubilee-logo.png' width="30" height="40"> Mattumagala Sacred Heart Parish</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Important Links</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">To Sinhala</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Important Links</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">To Sinhala</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="slider">
      <ul class="slides">
        <li><img src="./dist/images/slider/slide-1.gif" class="responsive-img"></li>
        <li><img src="./dist/images/slider/slide-2.gif" class="responsive-img"></li>
        <li><img src="./dist/images/slider/slide-3.gif" class="responsive-img"></li>
      </ul>
    </div>
  </div>

  <div class="section">
    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="green accent-4 card-title center-align">Weekly Mass Schedule</div >
          <table class="bordered">
            <tr>
              <th>Sunday</th>
              <th></th>
            </tr>
            <tr>
              <td>06.30am</td><td>(Singhala - Mattumagala)</td>
            </tr>
            <tr>
              <td>08.00am</td><td>(Singhala - Mattumagala)</td>
            </tr>
            <tr>
              <td>05.00pm</td><td>(English - Mattumagala)</td>
            </tr>
            <tr>
              <th>Tuesday</th>
              <th></th>
            </tr>
            <tr>
              <td>05.30pm</td><td>(Singhala - Mattumagala)</td>
            </tr>
            <tr>
              <th>Wednesday</th>
              <th></th>
            </tr>
            <tr>
              <td>05.30pm</td><td>(Singhala - Mattumagala)</td>
            </tr>
            <tr>
              <td>06.00pm</td><td>Divine Mercy Cheplet</td>
            </tr>
            <tr>
              <th>Thursday</th>
              <th></th>
            </tr>
            <tr>
              <td>11.11am</td><td>(Singhala - Welisara)</td>
            </tr>
            <tr>
              <td>05.45pm</td><td>(Singhala - Welisara)</td>
            </tr>
            <tr>
              <td>08.30am-09.00pm</td><td>Exposition of the Blessed Sacrament</td>
            </tr>
            <tr>
              <th>Friday</th>
              <th></th>
            </tr>
            <tr>
              <td>04.45pm-05.45pm</td><td>Holy Houre with Blessed Sacrament</td>
            </tr>
            <tr>
              <td>06.00pm</td><td>(Singhala - Mattumagala)</td>
            </tr>
            <tr>
              <th>Saturday</th>
              <th></th>
            </tr>
            <tr>
              <td>05.30pm</td><td>Mass for Sunday - (Singhala - Welisara)</td>
            </tr>
            <tr>
              <th colspan="2">Every First Saturday</th>
            </tr>
            <tr>
              <td>07.00am</td><td>as at Grotto (Singhala - Mattumagala)</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="col s12 m5">
        <div class="card">
          <div class="green accent-4 card-title center-align">
            The new view of the Sacred Heart Parish Mattumagala
          </div >
          <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ch3-1.jpg" class="col s12 m12">
          <div class="row home-img">
              <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ch3.jpg" class="col s12 m4">
              <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/20150710_093324.jpg" class="col s12 m4">
              <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ATT_22.jpg" class="col s12 m4">
          </div>
        </div>
      </div>

      <div class="col s12 m3">
        <div class="card">
          <img src="./dist/images/parish_priest/parish-priest.jpg" class="col s12 m12">
          <div class="card-action"><p>Parish Priest Rev. Fr. B. Anselm Shiran</p></div>
        </div>
        <div class="card">
          <div class="card-title green accent-4">Jubilly Song of Saced Heart Parish Mattumagala</div>
          <audio controls="" class="col s12 m12">
            <source src="./dist/music/AA Sir Hade Divya Jesu.mp3" type="audio/mpeg">
            <source src="./dist/music/AA Sir Hade Divya Jesu.mp3" type="audio/ogg">
            Your browser does not support this audio format.
          </audio>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <!-- <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div> -->
    <div class="parallax"><img src="./dist/images/29-14-Red-page_03.gif" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send red-text"></i></h3>
          <h4>A Glimpse into the History of Mattumagala Parish.</h4>
          <p class="left-align light">The records of the Mattumagala Church indicate the commencement of its history dating back to more than 100 years.It was intended to build The Sacred Heart Church on an acerage of land situated along the Colombo-Negombo Road, known as Kahatagahawatte or Thalgawatte. This land was situated in the Western Province,&nbsp;<a href="">read more...</a></p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <!-- <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div> -->
    <div class="parallax"><img src="./dist/images/27--4-3_03.gif" alt="Unsplashed background img 3"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send red-text"></i></h3>
          <h4>Establishment of Mattumagala Parish.</h4>
          <p class="left-align light">The Parish Priest of Nagoda in the early 1960s was Rev. Fr. Fabian (O.M.I.), who was very keen to establish a separate parish for the Catholics of Mattumagala and devolve authority and responsibility entirely to the resident Parish Priest of that Parish. Fr. Fabian worked zealously towards achieving his desire, and&nbsp;<a href="">read more...</a></p>
        </div>
      </div>

    </div>
  </div>

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
  </footer>


  <!--  Scripts-->
  <script src="./dist/js/jquery-2.1.1.min.js"></script>
  <script src="./dist/js/materialize.js"></script>
  <script src="./dist/js/init.js"></script>
  <script src="./dist/js/script.js"></script>
  </body>
</html>
