<?php session_start();
$user = $_SESSION['user_id'];
include_once 'config.php';
include_once 'include/connect_db.php';
include_once 'include/php_functions.php';

$lang = getLang();
include_once 'language/'.$lang.'.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" <?php echo 'lang="'.$lang.'"';?>>  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

    <title>Univer - універсальне рішення</title>

    <!-- CSS -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link data-dump-line-numbers="all" rel="stylesheet/less" type="text/css" href="css/style.less">

    
</head>
<body>     
        
<?php include_once "include/menu.php"; ?>

<section class="container-fluid">
    <div id="carouselExampleIndicators" class="row carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/slider/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider/3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</section>

<div class="container text-center img-bg py-5 sh-b-20">
<a href="how_it_work.php">
    <button class="btn btn-lg btn-primary center-block">
        <?php echo HOW_IT_WORK;?>
    </button>
</a>
<section class="my-4"> 
    <div class="text-center"><h1>Розпочати протягом хвилини</h1></div>
    <button class="btn btn-lg btn-primary center-block">Просмотреть</button>
</section>

<section class="my-4"> 
    <div class="text-center"><h1>Переваги (афоризми)</h1></div>
    <div class="row">
    <div class="card col-4 text-center">
      <img class="card-img-top" src="img/leaf/1.png" alt="Card image cap" style="width: 55px;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card col-4 text-center">
      <img class="card-img-top" src="img/leaf/1.png" alt="Card image cap" style="width: 55px;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card col-4 text-center">
      <img class="card-img-top" src="img/leaf/1.png" alt="Card image cap" style="width: 55px;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>
</section>

<section class="popular-types"> 
    <div class="popular-types-box col-12" >
    <div class="row">
        <div class="title-wrap">
            <div class="bg-white py-4 text-center"><h1><?php echo FEATURED_TASKS;?></h1></div>
        </div> 
        <div class="col-4 col-sm-2 leaf-top"></div>
        <div class="col-4 col-sm-2 leaf-top"></div>
        <div class="col-4 col-sm-2 leaf-top"></div>
        <div class="d-none d-sm-block col-sm-2 leaf-top"></div>
        <div class="d-none d-sm-block col-sm-2 leaf-top"></div>
        <div class="d-none d-sm-block col-sm-2 leaf-top"></div>
           
        <div class="col-4 col-sm-2 leaf">
            <div>
                <img alt="Диплом" src="img/leaf/1.png">
                <div>Диплом</div>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-2 leaf">
            <div>
                <img alt="1" src="img/leaf/2.png">
                <div>Тести</div>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-2 leaf">
            <div>
                <img alt="1" src="img/leaf/3.png">
                <div>Контрольная</div>
            </div>
        </div>
        <div class="col-4 col-sm-2 leaf">
            <div>
                <img alt="1" src="img/leaf/4.png">
                <div>Курсовая</div>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-2 leaf">
            <div>
                <img alt="1" src="img/leaf/5.png">
                <div>Диссертация</div>
            </div>
        </div>
        <div class="col-4 col-sm-2 leaf">
            <div>
                <img alt="1" src="img/leaf/6.png">
                <div>Чертеж</div>
            </div>
        </div>
        </div> 
    </div>
</section>
<button class="btn btn-primary">Інші види робіт</button>   
<section class="my-4" id="tasksWrap">
    <div class="index-title-box">Останні надходження</div>

    <?php
        $arr = getTypeSection($_SESSION['lang']);
        $type_arr = $arr['type'];
        $section_arr = $arr['section'];

        include "include/connect_db.php";

    if ($result = mysqli_query ($link, "SELECT 
    tasks.task_id,
    tasks.title,
    tasks.type,
    tasks.section,
    tasks.description,
    tasks.budget,
    tasks.currency,
    tasks.limit_date,
    tasks.published,
    tasks.discipline,
    tasks.attach,
    tasks.customer_id,
    users.user_id,
    users.user_name,
    users.avatar
    FROM tasks 
    LEFT JOIN users ON tasks.customer_id = users.user_id 
    WHERE status = 0 ORDER BY tasks.task_id  DESC LIMIT 5 ")){
        while ($row = mysqli_fetch_assoc($result)){
            include "include/task.php";
        }
    }?>
</section>
555
<section>
    <ul>
  <li>
    <a href="#" contenteditable>
      <h2>Title #1</h2>
      <p>Text Content #1</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #2</h2>
      <p>Text Content #2</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #3</h2>
      <p>Text Content #3</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #4</h2>
      <p>Text Content #4</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #5</h2>
      <p>Text Content #5</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #6</h2>
      <p>Text Content #6</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #7</h2>
      <p>Text Content #7</p>
    </a>
  </li>
  <li>
    <a href="#" contenteditable>
      <h2>Title #8</h2>
      <p>Text Content #8</p>
    </a>
  </li>
</ul>
</section>
<script type="text/javascript">
   $(document).ready(function () {
  all_notes = $("li a");

  all_notes.on("keyup", function () {
    note_title = $(this).find("h2").text();
    note_content = $(this).find("p").text();

    item_key = "list_" + $(this).parent().index();

    data = {
      title: note_title,
      content: note_content
    };

    window.localStorage.setItem(item_key, JSON.stringify(data));
  });

  all_notes.each(function (index) {
    data = JSON.parse(window.localStorage.getItem("list_" + index));

    if (data !== null) {
      note_title = data.title;
      note_content = data.content;

      $(this).find("h2").text(note_title);
      $(this).find("p").text(note_content);
    }
  });
});
</script>
<style type="text/css">
    body {
  margin: 20px auto;
  font-family: 'Lato';
  background:#666;
  color:#fff;
}

*{
  margin:0;
  padding:0;
}

h2 {
  font-weight: bold;
  font-size: 2rem;
}
p {
  font-family: 'Reenie Beanie';
  font-size: 2rem;
}
ul,li{
  list-style:none;
}
ul{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
ul li a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  transform: rotate(-6deg);
  transition: transform .15s linear;
}

ul li:nth-child(even) a{
  transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
ul li:nth-child(3n) a{
  transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
ul li:nth-child(5n) a{
  transform:rotate(5deg);
  position:relative;
  top:-10px;
}

ul li a:hover,ul li a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  transform: scale(1.25);
  position:relative;
  z-index:5;
}

ul li{
  margin:1em;
}
</style>


<section>
    <?php include_once "include/task.php"; ?>
    <p>Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.</p>
    <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
</section>                       
</div>

<?php include_once "include/footer.html"; ?>    


</body>

<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>

<!--<script type="text/javascript" src="js/star-rating.min.js"></script>-->
<script type="text/javascript" src="js/bootstrap-rating.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/less.min.js"></script>
<script type="text/javascript" src="js/timeago/jquery.timeago.js"></script>
<script type="text/javascript" src="js/timeago/jquery.timeago.<?php echo $lang;?>.js"></script>

<script type="text/javascript">
    taskTimeAgo();
    $('input').rating();
</script>


</html>
