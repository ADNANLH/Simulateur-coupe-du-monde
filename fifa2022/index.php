
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head> 
<body>




<!-- onsubmit="return false" -->
<div class="form">
<form action="index.php" method="POST" >

    <div class="matches">
        <div class="head">
            <span class="date">23 NOV - 11:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 9</span>
        </div>
        <div class="match">
            <img src="https://img.icons8.com/color/512/morocco-circular.png" alt="">
            <h4>MOROCCO</h4>
            
            <div class="inputs">
                <input type="number" min="0" name="morocco1" value="0">
                <span>-</span>
                <input type="number" min="0" name="croatia1" value="0">
            </div>
            <img src="https://img.icons8.com/color/512/croatia-circular.png" alt="">
            <h4>CROATIA</h4>
        </div>
        
    </div>
    <div class="matches">
        <div class="head">
            <span class="date">23 NOV - 20:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 12</span>
        </div>
        <div class="match">
            <img src="https://img.icons8.com/color/512/belgium-circular.png" alt="">
            <h4>BELGIUM</h4>
            
            <div class="inputs">
                    <input type="number" min="0" name="belgium1" value="0">
                    <span>-</span>
                    <input type="number" min="0" name="canada1" value="0">
                </div>
            <img src="https://img.icons8.com/color/512/canada-circular.png" alt="">
            <h4>CANADA</h4>
        </div>
        
    </div>
    <div class="matches">
        <div class="head">
            <span class="date">27 NOV - 14:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 26</span>
        </div>
        <div class="match">
        <img src="https://img.icons8.com/color/512/belgium-circular.png" alt="">
        <h4>BELGIUM</h4>
        
                <div class="inputs">
                    <input type="number" min="0" name="belgium2" value="0">
                    <span>-</span>
                    <input type="number" min="0" name="morocco2" value="0">
                </div>
            <img src="https://img.icons8.com/color/512/morocco-circular.png" alt="">
            <h4>MOROCCO</h4>
        </div>
        
    </div>
    <div class="matches">
        <div class="head">
            <span class="date">27 NOV - 17:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 27</span>
        </div>
        <div class="match">
            <img src="https://img.icons8.com/color/512/croatia-circular.png" alt="">
            <h4>CROATIA</h4>
            
            <div class="inputs">
                    <input type="number" min="0" name="croatia2" value="0">
                    <span>-</span>
                    <input type="number" min="0" name="canada2" value="0">
                </div>
                <img src="https://img.icons8.com/color/512/canada-circular.png" alt="">
            <h4>CANADA</h4>
        </div>

    </div>
    <div class="matches">
        <div class="head">
            <span class="date">01 DIC - 16:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 41</span>
        </div>
        <div class="match">
            <img src="https://img.icons8.com/color/512/croatia-circular.png" alt="">
            <h4>CROATIA</h4>
            
            <div class="inputs">
                <input type="number" min="0" name="croatia3" value="0">
                <span>-</span>
                <input type="number" min="0" name="belgium3" value="0">
            </div>
            <img src="https://img.icons8.com/color/512/belgium-circular.png" alt="">
            <h4>BELGIUM</h4>
        </div>
        
    </div>
    <div class="matches">
        <div class="head">
            <span class="date">01 DIC - 16:00 H</span>
            <span class="goals">FINALIZADO</span>
            <span class="pardido">PARTIDO 42</span>
        </div>
        <div class="match">
            <img src="https://img.icons8.com/color/512/canada-circular.png" alt="">
            <h4>CANADA</h4>
            
            <div class="inputs">
                <input type="number" min="0" name="canada3" value="0">
                <span>-</span>
                <input type="number" min="0" name="morocco3" value="0">
            </div>
            <img src="https://img.icons8.com/color/512/morocco-circular.png" alt="">
            <h4>MOROCCO</h4>
        </div>
        
        <input type="submit" value="result" name="submit" id="submit" >
    </div>
</form>
</div>



<!-- CODE PHP -->
<?php
   
    
    

        // declaration de tout avec 0
        $ptsMorocco = 0;
        $ptsCroatia = 0;
        $ptsBelgium = 0;
        $ptsCanada = 0;

        $ganMorocco = 0; 
        $ganCroatia = 0; 
        $ganBelgium = 0; 
        $ganCanada = 0;

        $empMorocco = 0; 
        $empCroatia = 0; 
        $empBelgium = 0; 
        $empCanada = 0;

        $perMorocco = 0; 
        $perCroatia = 0; 
        $perBelgium = 0; 
        $perCanada = 0;

        $gfMorocco = 0; 
        $gfCroatia = 0; 
        $gfBelgium = 0; 
        $gfCanada = 0;

        $gcMorocco = 0; 
        $gcCroatia = 0; 
        $gcBelgium = 0; 
        $gcCanada = 0;

        //morocco
        
        //check if the inputs empty or not
        if ((empty($_POST['morocco1']) && empty($_POST['croatia1'])) || (empty($_POST['belgium1']) && empty($_POST['canada1'])) || (empty($_POST['belgium2']) && empty($_POST['morocco2'])) || (empty($_POST['croatia2']) && empty($_POST['canada2'])) || (empty($_POST['croatia3']) && empty($_POST['belgium3'])) || (empty($_POST['canada3']) && empty($_POST['morocco3']))) {
            die();
        }else{
            $morroccoFirstMatch = $_POST["morocco1"];
            $morroccoSecondMatch = $_POST["morocco2"];
            $morroccoThirdMatch = $_POST["morocco3"];
    
            //croatia
            $croatiaFirstMatch = $_POST["croatia1"];
            $croatiaSecondMatch = $_POST["croatia2"];
            $croatiaThirdMatch = $_POST["croatia3"];
    
            //belgium
            $belgiumFirstMatch = $_POST["belgium1"];
            $belgiumSecondMatch = $_POST["belgium2"];
            $belgiumThirdMatch = $_POST["belgium3"];
    
            //canada
            $canadaFirstMatch = $_POST["canada1"];
            $canadaSecondMatch = $_POST["canada2"];
            $canadaThirdMatch = $_POST["canada3"];

            
            //matches 1
            if($morroccoFirstMatch > $croatiaFirstMatch){
                $ptsMorocco += 3;
                $ganMorocco += 1;
                $perCroatia += 1;
                $gfMorocco += $morroccoFirstMatch;
                $gfCroatia += $croatiaFirstMatch;
    
                $gcMorocco += $croatiaFirstMatch;
                $gcCroatia += $morroccoFirstMatch;
            }elseif($morroccoFirstMatch == $croatiaFirstMatch){
                $ptsMorocco += 1;
                $ptsCroatia += 1;
                $empMorocco += 1;
                $empCroatia += 1;
                $gfMorocco += $morroccoFirstMatch;
                $gfCroatia += $croatiaFirstMatch;
                $gcMorocco += $croatiaFirstMatch;
                $gcCroatia += $morroccoFirstMatch;
            }elseif($morroccoFirstMatch < $croatiaFirstMatch){
                $ptsCroatia += 3;
                $ganCroatia += 1;
                $perMorocco += 1;
                $gfMorocco += $morroccoFirstMatch;
                $gfCroatia += $croatiaFirstMatch;
                $gcMorocco += $croatiaFirstMatch;
                $gcCroatia += $morroccoFirstMatch;
            }

            if($canadaFirstMatch > $belgiumFirstMatch){
                $ptsCanada += 3;
                $ganCanada += 1;
                $perBelgium += 1;
                $gfCanada += $canadaFirstMatch;
                $gfBelgium += $belgiumFirstMatch;
    
                $gcCanada += $belgiumFirstMatch;
                $gcBelgium += $canadaFirstMatch;
            }elseif($canadaFirstMatch == $belgiumFirstMatch){
                $ptsCanada += 1;
                $ptsBelgium += 1;
                $empCanada += 1;
                $empBelgium += 1;
                $gfCanada += $canadaFirstMatch;
                $gfBelgium += $belgiumFirstMatch;
                $gcCanada += $belgiumFirstMatch;
                $gcBelgium += $canadaFirstMatch;
            }elseif($canadaFirstMatch < $belgiumFirstMatch){
                $ptsBelgium += 3;
                $ganBelgium += 1;
                $perCanada += 1;
                $gfCanada += $canadaFirstMatch;
                $gfBelgium += $belgiumFirstMatch;
                $gcCanada += $belgiumFirstMatch;
                $gcBelgium += $canadaFirstMatch;
            }

            //matches 2
            if($morroccoSecondMatch > $belgiumSecondMatch){
                $ptsMorocco += 3;
                $ganMorocco += 1;
                $perBelgium += 1;
                $gfMorocco += $morroccoSecondMatch;
                $gfBelgium += $belgiumSecondMatch;
    
                $gcMorocco += $belgiumSecondMatch;
                $gcBelgium += $morroccoSecondMatch;
            }elseif($morroccoSecondMatch == $belgiumSecondMatch){
                $ptsMorocco += 1;
                $ptsBelgium += 1;
                $empMorocco += 1;
                $empBelgium += 1;
                $gfMorocco += $morroccoSecondMatch;
                $gfBelgium += $belgiumSecondMatch;
                $gcMorocco += $belgiumSecondMatch;
                $gcBelgium += $morroccoSecondMatch;
            }elseif($morroccoSecondMatch < $belgiumSecondMatch){
                $ptsBelgium += 3;
                $ganBelgium += 1;
                $perMorocco += 1;
                $gfMorocco += $morroccoSecondMatch;
                $gfBelgium += $belgiumSecondMatch;
                $gcMorocco += $belgiumSecondMatch;
                $gcBelgium += $morroccoSecondMatch;
            }

            if($croatiaSecondMatch > $canadaSecondMatch){
                $ptsCroatia += 3;
                $ganCroatia += 1;
                $perCanada += 1;
                $gfCroatia += $croatiaSecondMatch;
                $gfCanada += $canadaSecondMatch;
                $gcCroatia += $canadaSecondMatch;
                $gcCanada += $croatiaSecondMatch;
            }elseif($croatiaSecondMatch == $canadaSecondMatch){
                $ptsCroatia += 1;
                $ptsCanada += 1;
                $empCroatia += 1;
                $empCanada += 1;
                $gfCroatia += $croatiaSecondMatch;
                $gfCanada += $canadaSecondMatch;
                $gcCroatia += $canadaSecondMatch;
                $gcCanada += $croatiaSecondMatch;
            }elseif($croatiaSecondMatch < $canadaSecondMatch){
                $ptsCanada += 3;
                $ganCanada += 1;
                $perCroatia += 1;
                $gfCroatia += $croatiaSecondMatch;
                $gfCanada += $canadaSecondMatch;
                $gcCroatia += $canadaSecondMatch;
                $gcCanada += $croatiaSecondMatch;
            }

            //matches 3
            if($croatiaThirdMatch > $belgiumThirdMatch){
                $ptsCroatia += 3;
                $ganCroatia += 1;
                $perBelgium += 1;
                $gfCroatia += $croatiaThirdMatch;
                $gfBelgium += $belgiumThirdMatch;
                $gcCroatia += $belgiumThirdMatch;
                $gcBelgium += $croatiaThirdMatch;
            }elseif($croatiaThirdMatch == $belgiumThirdMatch){
                $ptsCroatia += 1;
                $ptsBelgium += 1;
                $empCroatia += 1;
                $empBelgium += 1;
                $gfCroatia += $croatiaThirdMatch;
                $gfBelgium += $belgiumThirdMatch;
                $gcCroatia += $belgiumThirdMatch;
                $gcBelgium += $croatiaThirdMatch;
            }elseif($croatiaThirdMatch < $belgiumThirdMatch){
                $ptsBelgium += 3;
                $ganBelgium += 1;
                $perCroatia += 1;
                $gfCroatia += $croatiaThirdMatch;
                $gfBelgium += $belgiumThirdMatch;
                $gcCroatia += $belgiumThirdMatch;
                $gcBelgium += $croatiaThirdMatch;
            }
            if($morroccoThirdMatch > $canadaThirdMatch){
                $ptsMorocco += 3;
                $ganMorocco += 1;
                $perCanada += 1;
                $gfMorocco += $morroccoThirdMatch;
                $gfCanada += $canadaThirdMatch;
                $gcMorocco += $canadaThirdMatch;
                $gcCanada += $morroccoThirdMatch;
            }elseif($morroccoThirdMatch == $canadaThirdMatch){
                $ptsMorocco += 1;
                $ptsCanada += 1;
                $empMorocco += 1;
                $empCanada += 1;
                $gfMorocco += $morroccoThirdMatch;
                $gfCanada += $canadaThirdMatch;
                $gcMorocco += $canadaThirdMatch;
                $gcCanada += $morroccoThirdMatch;
            }elseif($morroccoThirdMatch < $canadaThirdMatch){
                $ptsCanada += 3;
                $ganCanada += 1;
                $perMorocco += 1;
                $gfMorocco += $morroccoThirdMatch;
                $gfCanada += $canadaThirdMatch;
                $gcMorocco += $canadaThirdMatch;
                $gcCanada += $morroccoThirdMatch;
            }
         
        }


        
        //add the point in arrays

        $groupe = array(
            array("Morocco", $ptsMorocco, 3 , $ganMorocco, $empMorocco, $perMorocco, $gfMorocco, $gcMorocco),
            array("Croatia", $ptsCroatia, 3 , $ganCroatia, $empCroatia, $perCroatia, $gfCroatia, $gcCroatia),
            array("Belgium", $ptsBelgium, 3,$ganBelgium, $empBelgium, $perBelgium, $gfBelgium, $gcBelgium),
            array("Canada", $ptsCanada, 3,$ganCanada, $empCanada, $perCanada, $gfCanada, $gcCanada)
        );
?>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>SELECCION</th>
                    <th>PTS.</th>
                    <th>PAR.</th>
                    <th>GAN.</th>
                    <th>EMP.</th>
                    <th>PER.</th>
                    <th>G.F.</th>
                    <th>G.C.</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                for($i = 0; $i < count($groupe); $i++){
                    echo "<tr>";
                    echo '<th scope="row">' . $i+1 . '</th>';
                    for($j = 0; $j < count($groupe[$i]); $j++){

                        echo  "<td class=''>".  $groupe[$i][$j] ."</td>"; 
                        
                    }
                    echo "</tr>";
                }
            
            ?>
                
            </tbody>
        </table>
    </div>

    
</body>
</html>
