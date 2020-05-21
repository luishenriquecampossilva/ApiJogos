
<php


 include('game.php');

     

    

   
    





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>api jogos</title>

    <style>
      .seila{
          width:100%;
          height:200px;
          background-color:#A18F72;
          box-shadow: 10px 10px 5px grey;
      }
      .formulario{

        background-color:;
        width:500px;
       
       

      }
      .titulo{

        background-color:;
        text-align:center;
        color:white;
        text-shadow: 2px 2px 5px black;
      }
    .ima{
      background-color:;
      margin:auto;
      
    }

    .game{
      background-color:;
    }
    @media (min-width: 1170px) and (max-width: 1800px) { 

      .formulario{
        margin-left:700px;
      }
    }
      @media (min-width: 1000px) and (max-width: 1179px) { 

.formulario{
  margin-left:500px;
}




     }
    </style>
  </head>
  <body>

 
  
   <div class = "seila">
    <h1 class = "titulo">GAMES RAWG</h1>
    <div class = "ima">
    <center>
      <img src="game-controller.png"/>
      </center>
    </div>
    <div class = "game">
        <form name="DateFilter" method="POST"class ="formulario">
        Entre:
        
          <input type="date" name="dataini"/>

e:
          <input type="date" name="datafim" />
          <input type="submit" name="submit" value="Buscar"/>
        </form>
        
        </div>
    

</div>

 
</div>
<br>
<br>
  <div class = "container">


    
        <div class = "row">
            
    <?php include('game.php');?>
  
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>