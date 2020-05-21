<?php 




if(isset($_POST['dateFrom']) && isset($_POST['dateTo'])){
$inicio = date('Y-m-d', strtotime($_POST['dateFrom']));
$fim = date('Y-m-d', strtotime($_POST['dateTo']));
if($inicio>$fim){

    $fim = $inicio;
}
}

else{

    $inicio = '2020-04-30';
    $fim = '2020-05-30';
}

        $url = 'https://api.rawg.io/api/games?dates='.$inicio.','.$fim.'&ordering=-added';
        $consumo = json_decode(file_get_contents($url));
 

        // var_dump($consumo->results[0]->clip->clip);
// var_dump($consumo->results[0]);
// //  var_dump($consumo);

for($i=0; $i<=count($consumo->results); $i++){

    if(isset($consumo->results[$i]->background_image) && isset($consumo->results[$i]->clip->clip)){
echo "<div class = 'col-lg-4 col-md-4 col-sm-4'><div class='card' style='width: 18rem;'>
<img class='card-img-top' src='".$consumo->results[$i]->background_image."'style='height: 200px;' alt='Card image cap'>
<div class='card-body'>
<h1 style = 'font-size:11px'>".$consumo->results[$i]->name."</h1>
<a href = '".$consumo->results[$i]->clip->clip."'>Preview</a>
<p><b>Plataforma Principal:</b>".$consumo->results[$i]->platforms[0]->platform->name."
  <p><b>Genero:</b>".$consumo->results[$i]->genres[0]->name."
</div>
</div></div>";
}}
//  $consumo->results[0]->background_image;
// $teste= "s";
// // echo $teste = $consumo->results[1]->name;
// for($i=0; $i<=23; $i++){

// // $teste+=$consumo->results[0]->name;
// echo $consumo->results[$i]->name.'g';
// echo "</br>";

// }
?>


