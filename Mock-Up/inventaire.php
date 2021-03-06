<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>WebPyRobot - Inventaire</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>

    <div class="navbar-fixed">
      <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="accueil.php" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Combat<span class="new badge">2</span></a></li>
            <li><a href="#"><i class="material-icons left">attach_money</i>300</a></li>
            <li><a href="#"><i class="material-icons left">account_box</i>John Doe</a></li>
            <li><a href="#"><i class="material-icons">settings</i></a></li>
            <li><a href="#"><i class="material-icons">power_settings_new</i></a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li>
              <div class="userView">
                <img class="background" src="img/galaxy.jpg">
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
              </div>
            </li>
            <li><a class="waves-effect" href="#">Combat<span class="new badge">2</span></a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">attach_money</i>300</a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">settings</i>Paramêtre</a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">power_settings_new</i>Déconecter</a></li>
            <li><div class="divider"></div></li>
            <?php include_once "static/mobilNav_Link.php"; ?>

          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="section">
        <div class="row">

          <?php include_once "static/sideNav.php"; ?>

          <div class="col s12 m9 l10 pad">
            <div class="row z-depth-1 section padding-section">
              <div class="pad row col s12 m6 l6">
                
                <div class="card col s12 m12 l12">
                  <div class="card-image">
                    <img src="img/galaxy.jpg">
                    <span class="card-title">Tank #1</span>
                  </div>
                  <div class="card-content">
                    <h5>Statistiques</h5>
                    <p>Atk = 100</p>
                    <p>Def = 100</p>
                    <p>Vie = 100</p>
                  </div>
                </div>
                <div class="col row s12 m12 l12">

                  <div class="card-panel mar col s3 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><span class="black-text">Canon</span></div>
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon activator responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Arme #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel mar col s3 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><span class="black-text">Blindage</span></div>
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon activator responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel mar col s3 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><span class="black-text">Chenille</span></div>
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon activator responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Chenille #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel mar col s3 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><span class="black-text">Syst E</span></div>
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon activator responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Syst E #1</span></div>
                    </div>
                  </div>

                </div>
                
              </div>
              <div class="pad row col s12 m6 l6 ">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s4"><a href="#Canon" class="active">Canons</a></li>
                    <li class="tab col s4"><a href="#Blindage">Blindages</a></li>
                    <li class="tab col s4"><a href="#Chenille">Chenilles</a></li>
                    <li class="tab col s4"><a href="#info">Système</a></li>
                  </ul>
                </div>
                <div id="Canon" class="col s12">

                <?php for ($i=1; $i < 7; $i++) { ?>
                  <div class="card-panel hoverable col s4 grey lighten-5 modal-trigger" href="#canon<?php echo $i; ?>">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #<?php echo $i; ?></span></div>
                    </div>
                  </div>
                  <div id="canon<?php echo $i; ?>" class="modal">
                    <div class="modal-content">
                      <h4>Canon #<?php echo $i; ?></h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
                    </div>
                  </div>
                  <?php } ?>

                </div>
                <div id="Blindage" class="col s12">

                  <?php for ($i=1; $i < 7; $i++) { ?>
                  <div class="card-panel hoverable col s4 grey lighten-5 modal-trigger" href="#blindage<?php echo $i; ?>">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #<?php echo $i; ?></span></div>
                    </div>
                  </div>
                  <div id="blindage<?php echo $i; ?>" class="modal">
                    <div class="modal-content">
                      <h4>Blindage #<?php echo $i; ?></h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
                    </div>
                  </div>
                  <?php } ?>

                </div>
                <div id="Chenille" class="col s12">

                  <?php for ($i=1; $i < 3; $i++) { ?>
                  <div class="card-panel hoverable col s4 grey lighten-5 modal-trigger" href="#chenille<?php echo $i; ?>">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Chenille #<?php echo $i; ?></span></div>
                    </div>
                  </div>
                  <div id="chenille<?php echo $i; ?>" class="modal">
                    <div class="modal-content">
                      <h4>Chenille #<?php echo $i; ?></h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
                    </div>
                  </div>
                  <?php } ?>

                </div>
                <div id="info" class="col s12">

                  <?php for ($i=1; $i < 3; $i++) { ?>
                  <div class="card-panel hoverable col s4 grey lighten-5 modal-trigger" href="#se<?php echo $i; ?>">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Système #<?php echo $i; ?></span></div>
                    </div>
                  </div>
                  <div id="se<?php echo $i; ?>" class="modal">
                    <div class="modal-content">
                      <h4>Système <?php echo $i; ?></h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
                    </div>
                  </div>
                  <?php } ?>

                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once "static/footer.php"; ?>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
</html>
