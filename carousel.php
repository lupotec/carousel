
<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Slideshow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Slideshow</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">



    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        for($x=0; $x< count($newArray); $x++)
        {
            if($x==0)
            {
                echo"<li data-target='#myCarousel' data-slide-to='".$x."' class='active'></li>";
            }else{
                echo"<li data-target='#myCarousel' data-slide-to='".$x."' ></li>";
            }
        }
        ?>
    </ol>
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


        <?php
        for($y=0; $y< count($newArray); $y++)
        {
            if($y==0)
            {
                echo"<div class='item active' STYLE=\"height:80vh; width:100vw; 
                background-image:url('$dir$newArray[$y]'); 
                background-size:cover; 
                background-position:center center;\">";
                echo"</div>";

            }else{

                echo"<div class='item' STYLE=\"height:80vh; width:100vw; 
                background-image:url('$dir$newArray[$y]'); 
                background-size:cover; 
                background-position:center center;\">";
                echo"</div>";

            }
        }
        ?>   
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Vorige</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Volgende</span>
    </a>


  </div>
</div>

</body>
</html>
