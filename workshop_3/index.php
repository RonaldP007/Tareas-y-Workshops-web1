<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        ksort($ceu);
        
        foreach($ceu as $key => $val){
        echo "The capital of $key is $val <br />"; 
        }

        $temperaturas = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        $total = 0;

        foreach($temperaturas as $valores){
            $total = $total + $valores;
        }
        echo "<br />Average Temperature is ". $total / count($temperaturas). "<br />";

        sort($temperaturas);
        echo "List of seven lowest temperatures : " ;     
        imp_seven($temperaturas);    

        rsort($temperaturas);
        echo "<br />List of seven highest temperatures: " ;
        imp_seven($temperaturas);  
        
        function imp_seven($array){
            for($i = 0; $i < 7; $i++){
                echo $array[$i];
                if($i < 6){
                    echo " ,";
                }else{
                    echo ".";
                }
            }
        }
            
    ?>
</body>
</html>