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
          <li><a href="#courses">Курсууд</a></li>
          <li><a href="#" data-target="#<?php 
          if($_SESSION['username']==""){
            echo"login";
          }
          else{
            echo"";
          }
          
          ?>" data-toggle="modal"><?php session_start(); 
                    if($_SESSION['username']==""){
                      echo"Нэвтрэх";
                    }
                    else{
                      echo($_SESSION['username']);
                    } 
          ?></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->