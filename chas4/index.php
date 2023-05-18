<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
   <?php



// $recenica = "maja vozi velosiped";
// $zbor = "maja";

// $proverka = strpos($recenica, $zbor) !== false;

// return $proverka;
// echo $proverka;





// $sentence = "maja vozi velosiped";
// $word = "maja";

// if (strpos($sentence, $word) !== false) {
//     return "maja vozi velosiped.";
// } else {
//     return "zborot go nema vo recenicata.";
// }

// //ako brojot na krateri na imeto dime e pogolemo od 5 karakteri isprintajte deka imeto ima poveke od pet karakteri

// $name = "dime";

// if (strlen($name) > 5) {
//     echo "ima poveke od 5 karakteri"; 
// }
//     elseif (strlen($name) == 5) {
//         echo "ima samo 5 karakteri ";

//     }
//  else {
//     echo "nema poveke od 5 karakteri";
// }

//ako e pogolemo od 5 da printa deka ako ne e pogolemo da printa deka ne e pogolemo i ako e ednakvo da pisuva deka e ednakvo
//is elseif else


//de

// $brzina=40;
// if( $brizna< 60){
//     echo "vozite super";
// }
// elseif($brizna > 60 && $brizna < 100 ){
//     echo "namalete";
// }
// else ($brizna >100){
//     echo "zatvor";
// }

$DenOdNedelata = date('l');
echo $DenOdNedelata;
switch ($DenOdNedelata) {
    case "Monday":
        echo "Denes e ponedelnik.";
        break;
    
    case 'Tuesday':
        echo "Denes e vtornik.";
        break;
    
    case 'Wednesday':
        echo "Denes e sreda.";
        break;
    
    case 'Thursday':
        echo "Denes e cetvrtpk.";
        break;
    
    case 'Friday':
        echo "Denes e petok.";
        break;
    
    case 'Saturday':
        echo "Denes e sabota.";
        break;
    
    case 'Sunday':
        echo "Denes e nedela.";
        break;
    
}
// echo $DenOdNedelata;
//ako e do 18 do 6 sabale da pisuva dobrovecer od
$chas=date('H');
echo $chas;

// if($chas > 18 && $chas <06){
//     echo "dobrovecer";
// }
// else if ($chas > 06 && $chas <11 ){
//     echo "dobro utro";
// }

//     else  ($chas > 11 && $chas <18 ){
//         echo "dobar den";
//     }
echo "<br>";
$chas = date('H');
echo $chas;

if ($chas > 18 || $chas < 06) {
    echo "dobro vecer";
} elseif ($chas >= 06 && $chas < 11) {
    echo "dobro utro";
} else {
    echo "dobar den";
}
 ?>


 </body>

 </html>