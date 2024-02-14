<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tirage</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Tirage aléatoire</h1>
    <?php
    function printTab($tab){
        for($i=0;$i<count($tab);$i++){
            echo "<p>Indice n°" . $i . " : " . $tab[$i] . "</p>";
        }
    }
    function pair($n){
        return $n % 2 == 0;
    }
    function tirage(){
        $tab = array();
        $np = rand();
        $ni1 = rand();
        $ni2 = rand();
        $valid = false;
        while(!$valid){
            if(pair($np) && !pair($ni1) && !pair($ni2)){
                $tab[] = $np;
                $tab[] = $ni1;
                $tab[] = $ni2;
                $valid = true;
            }
            else{
                $np = rand();
                $ni1 = rand();
                $ni2 = rand();
            }
        }
    return $tab;
    }

    printTab(tirage());

    ?>
    <br></br>
    <a href="../index.html" id="return">Retour</a>
</body>

</html>