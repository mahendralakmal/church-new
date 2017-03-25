<!DOCTYPE html>
<html lang="en">
<?php require_once('./head.php'); ?>
<body>
<?php
require_once('./menu.php');
require_once('MysqliDb.php');
include('./slider/slider.php');

$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
?>


<div class="section">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="blue-grey-text darken-2 card-title center-align">Weekly Mass Schedule</div>
                <table class="bordered">
                    <tr>
                        <th>Sunday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>06.30am</td>
                        <td>(Singhala - Mattumagala)</td>
                    </tr>
                    <tr>
                        <td>08.00am</td>
                        <td>(Singhala - Mattumagala)</td>
                    </tr>
                    <tr>
                        <td>05.00pm</td>
                        <td>(English - Mattumagala)</td>
                    </tr>
                    <tr>
                        <th>Tuesday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>05.30pm</td>
                        <td>(Singhala - Mattumagala)</td>
                    </tr>
                    <tr>
                        <th>Wednesday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>05.30pm</td>
                        <td>(Singhala - Mattumagala)</td>
                    </tr>
                    <tr>
                        <td>06.00pm</td>
                        <td>Divine Mercy Cheplet</td>
                    </tr>
                    <tr>
                        <th>Thursday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>11.11am</td>
                        <td>(Singhala - Welisara)</td>
                    </tr>
                    <tr>
                        <td>05.45pm</td>
                        <td>(Singhala - Welisara)</td>
                    </tr>
                    <tr>
                        <td>08.30am-09.00pm</td>
                        <td>Exposition of the Blessed Sacrament</td>
                    </tr>
                    <tr>
                        <th>Friday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>04.45pm-05.45pm</td>
                        <td>Holy Houre with Blessed Sacrament</td>
                    </tr>
                    <tr>
                        <td>06.00pm</td>
                        <td>(Singhala - Mattumagala)</td>
                    </tr>
                    <tr>
                        <th>Saturday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>05.30pm</td>
                        <td>Mass for Sunday - (Singhala - Welisara)</td>
                    </tr>
                    <tr>
                        <th colspan="2">Every First Saturday</th>
                    </tr>
                    <tr>
                        <td>07.00am</td>
                        <td>as at Grotto (Singhala - Mattumagala)</td>
                    </tr>
                </table>
            </div>
        </div>

        <!--        <div class="col s12 m3">-->
        <!--            <div class="card">-->
        <!--                <div class="green accent-4 card-title center-align">-->
        <!--                    The new view of the Sacred Heart Parish Mattumagala-->
        <!--                </div>-->
        <!---->
        <!--                <div class="home-img">-->
        <!--                    <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ch3-1.jpg" class="col s12 m12">-->
        <!--                    <div>-->
        <!--                        <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ch3.jpg"-->
        <!--                             class="responsive-img col s12 m4">-->
        <!--                        <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/20150710_093324.jpg"-->
        <!--                             class="responsive-img col s12 m4">-->
        <!--                        <img alt="ch3.jpg" src="./dist/images/new_view_of_church_2015/ATT_22.jpg"-->
        <!--                             class="responsive-img col s12 m4">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!---->
        <!--            -->
        <!--        </div>-->


        <div class="col s12 m3">
            <div class="card">
                <img src="./dist/images/parish_priest/parish-priest.jpg" class="responsive-img">
                <div class="card-action"><p>Parish Priest Rev. Fr. B. Anselm Shiran</p></div>
            </div>
            <div class="card">
                <div class="card-title blue-grey-text darken-2 center-align">Jubilly Song of Saced Heart Parish
                    Mattumagala
                </div>
                <audio controls="" class="col s12 m12">
                    <source src="./dist/music/AA Sir Hade Divya Jesu.mp3" type="audio/mpeg">
                    <source src="./dist/music/AA Sir Hade Divya Jesu.mp3" type="audio/ogg">
                    Your browser does not support this audio format.
                </audio>
            </div>
        </div>

        <div class="col s12 m5">

            <div class="card">
                <div class="card-content">
                    <span class="card-title blue-grey-text darken-1">News &amp; Events</span>
                    <?php
                    $posts = $db->orderBy('id', 'Desc')->get('posts', 4);


                    foreach ($posts as $post) {
//                        print_r($post['approved']);
                        if ($post['approved']) {
                            ?>
                            <div class="card horizontal row">
                                <div class="card-image col s4 m3">
                                    <img src="./dist/images/new_view_of_church_2015/20150710_093324.jpg">
                                </div>
                                <div class="card-stacked col s8 m9">
                                    <div class="card-title"><?php echo $post['title'] ?></div>
                                    <div class="card-content">
                                        <p><?php echo strlen($post['description']) > 75 ? substr($post['description'], 0, 75) . '...' : $post['description'] ?></p>
                                    </div>
                                    <div class="card-action">
                                        <a href="./news.php?titile=<?php echo $post['title'] ?>&news=<?php echo $post['id'] ?>">This
                                            is a link</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
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
                <p class="left-align light">The records of the Mattumagala Church indicate the commencement of its
                    history dating back to more than 100 years.It was intended to build The Sacred Heart Church on
                    an
                    acerage of land situated along the Colombo-Negombo Road, known as Kahatagahawatte or
                    Thalgawatte.
                    This land was situated in the Western Province,&nbsp;<a href="">read more...</a></p>
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
                <p class="left-align light">The Parish Priest of Nagoda in the early 1960s was Rev. Fr. Fabian
                    (O.M.I.),
                    who was very keen to establish a separate parish for the Catholics of Mattumagala and devolve
                    authority and responsibility entirely to the resident Parish Priest of that Parish. Fr. Fabian
                    worked zealously towards achieving his desire, and&nbsp;<a href="">read more...</a></p>
            </div>
        </div>

    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>
