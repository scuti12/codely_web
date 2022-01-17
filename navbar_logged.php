<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span>CodeLy</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href=""></a></li>
          <li><a href="index.php">Курсууд</a></li>
          <li><a href="#" data-target="" ><?php session_start(); echo($_SESSION['username']) ?></a></li>
        </ul>
      </div>
      </div>
    </div>
  </nav>