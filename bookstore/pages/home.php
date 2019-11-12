<?php session_start(); ?>
<?php include("../includes/header.php");?>
<?php include("../includes/searchbar.php");?>


<div id="books" class="container" >

  <h1>Popular books</h1>
  <div id="popular" class="row" >
    
    <div class="column-md-3">
      <a href="#"><img src="../images/popular1.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular2.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular3.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular4.jpg"></a>
    </div>

    <button class="more"><a href="popular.html"><i class="fa fa-angle-right fa-3x"></i></a></button>
  </div>


  <h1>Newly Released books</h1>
  <div id="newly" class="row" >
    
    <div class="column-md-3">
      <a href="#"><img src="../images/popular1.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular2.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular3.jpg"></a>
    </div>

    <div class="column-md-3">
      <a href="#"><img src="../images/popular4.jpg"></a>
    </div>

    <button class="more"><a href="newly.html"><i class="fa fa-angle-right fa-3x"></i></a></button>

  </div>
  
  <div>
    <h2 style="text-align:center , color:darkblue">To Browse more Categories click here...</h2>
    <a href="browse.php"> <button style="border-radius:20px; background-color:lightblue; border:1px solid black; cursor:pointer">Browse</button></a>
  </div>

</div>
 