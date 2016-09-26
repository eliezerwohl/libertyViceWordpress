<?php
/*
 * Template Name: Home
 * Description:This is the home page
 */
?>

<?php get_header(); ?>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="navLogo" href="<?php echo $_SERVER['PHP_SELF'] ?>">Liberty Vice</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li data-id="bandHistorySection"><a data-toggle="pill" href="#">Band History</a></li>
      <li data-id="membersSection"><a  data-toggle="pill" href="#">Members</a></li>
      <li data-id="contactUsSection"><a data-toggle="pill" href="#">Contact Us</a></li>
      <li data-toggle="pill" data-id="demosSection"><a>Demos</a></li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-md-12 container-fluid">
  <div class="fadeIn jumbotron text-center section">
    <h2 class=""> Welcome To The</h2>
    <h2 class=""> Official Band Website Of</h2>
    <h1 id="logo">
    </h1>
  </div>
  <div class="col-md-12 section text-center jumbotron hideIt" id="demosSection">
    <h3 class="pink">Check out our first demo, "A Nice Day Inside" </h3>
    <audio id="myTune">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/music/niceDayInsideBeta.mp3">
      </audio>
    <div class="wrap hidden-xs ">
      <div class="boombox">
        <div class="handle"></div>
        <div class="body">
          <div class="controls">
            <div class="control-section-left"></div>
            <div class="control-section-right"></div>
          </div>
          <div class="left-speaker">
            <div class="circle"></div>
          </div>
          <div class="right-speaker">
            <div class="circle"></div>
          </div>
          <div class="display"></div>
          <div class="front-markings">
            <br>
            <button class="btn btn-block btn-default" onclick="document.getElementById('myTune').play()"><span class="glyphicon glyphicon-play"> </button>

            <button class="btn btn-md btn-block  btn-default" onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;"><span class="
  glyphicon glyphicon-stop"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="visible-xs">
      <button class="btn btn-block btn-default" onclick="document.getElementById('myTune').play()"><span class="glyphicon glyphicon-play"> </button>
      <button class="btn  btn-block btn-default" onclick="document.getElementById('myTune').pause()"><span class="
  glyphicon glyphicon-pause"> </button>
      <button class="btn btn-md btn-block  btn-default" onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;"><span class="
  glyphicon glyphicon-stop"></button>
    </div>
  </div>
  <div class="section hideIt jumbotron" id="bandHistorySection">
    <h2 class="text-center pink">Band History</h2>
    <br>
    <div class="col-md-6 text-center col-md-offset-3">
      <p><span class="pink">Liberty Vice</span> is made up of four childhood enemies who became best friends after discovering shared interests in violent video games and music. Jamming in basements, apartments, and any place that is willing to risk a noise violation ticket, <span class="pink">Liberty Vice</span> is working on their upcoming full length LP.</p>
    </div>
  </div>
  <div class="section col-md-12 text-center hideIt jumbotron" id="membersSection">
    <h2 class="text-center pink">Members </h2>
    <div class="row">
      <div class="col-md-6">
        <h3 class="name">Hank DeHanko </h3>
        <h4 class="instrument">Keys </h4>
        <p>The only member of the group with any musical training, Hank spends his time making strange and terrible noises on a his various synthesizers. </p>
      </div>
      <div class="col-md-6">
        <h3 class="name">Dynamite Lee </h3>
        <h4 class="instrument">Bass</h4>
        <p>Unable to learn a real instrument, Dynamite has played bass for many years. His bass of choice is a Rickenbacker 4003.</p>
      </div>
    </div>
    <div class="col-md-6">
      <h3 class="name">Randy Lahey </h3>
      <h4 class="instrument">Guitar </h4>
      <p>Writer of all the band’s material. Uses a Fender Strat. Idolizes Johnny Ramone.</p>
    </div>
    <div class="col-md-6">
      <h3 class="name">Joey Spaggetti </h3>
      <h4 class="instrument">Drums </h4>
      <p>Hailing from Canada, Joey loves drums so much, he often programs them for recording purposes so he can spend more time jamming to Iron Maiden and Rush.
      </p>
    </div>
  </div>
  <div class="section text-center hideIt jumbotron" id="contactUsSection">
    <h2 class="text-center pink">Contact Us </h2>

    <h3 class="name">Have Something to Say? </h3>

    <p>Looking to book, hire, or just "hello"? <br><a href="mailto:dyanmitelee@gmail.com?Subject=Liberty%20Vice%20Rules"><button class="btn col-sm-4 col-sm-offset-4  pinkButton btn-default btn-md">click here</button>
    </a>
      </br>
      <br>

      <h3 class="name">Problem With the Webzone? </h3>
      <p>Send our web guy some love! <br>
        <a href="mailto:eliezerwohl@gmail.com?Subject=problem%20with%20the%20webzone">
          <button class="btn btn-default col-sm-4 col-sm-offset-4  pinkButton btn-md">
        click here</button></p>

      </a>

  </div>

</div>

<?php get_footer(); ?>
