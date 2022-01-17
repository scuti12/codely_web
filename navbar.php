 <!--Navigation bar-->
 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
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
          <li><a href="#courses">КУРСУУД</a></li>
          <li><a href="#" data-target="#login" data-toggle="<?php session_start(); 
           if($_SESSION['username']==""){
            echo"modal";
          }
          else{
            echo"";
          } 
          ?>"><?php session_start();
                    if($_SESSION['username']==""){
                      echo"НЭВТРЭХ";
                    }
                    else{
                      echo(strtoupper($_SESSION['username']));
                    } 
          ?></a></li>
          <li><a href="logout.php"><? session_start();
          if(isset($_SESSION['username'])){
                      echo"ГАРАХ";
                    }?></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->