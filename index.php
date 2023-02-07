<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Link CSS -->
        <link rel="stylesheet" href="./style.css">

    <!--Link Bootstrap@5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <title>QATARE</title>
</head>
<body>
    <!-- LOGO HEADER -->
<div id="logo-header">
        <img id="logo-img" src="./images/logo.png" alt="">
    </div>
    <!-- LOGO HEADER -->

    <!-- HEADER -->
    <div id="header" style="height: 20rem;" >
        <div id="header-background" style="width: 100%; height: 100%;">

            <div class="p-5" style="direction: rtl; font-size: 50px; margin-right: 100px; color: white">
                <h1 style="font-size: 70px; font-weight: 800;">كأس</h1>
                <h1 style="font-size: 90px; font-weight: 800">العالم</h1>
            </div>
        </div>
    </div>

      <!--// HEADER //-->


    <!-- QATAR WORD -->
    <div class="d-flex justify-content-center" style="margin-top: 30px;">
        <img src="./images/qatar-word.png" alt="" style="width: 400px" ;style="height:91px"; >
    </div>
    <!--// QATAR WORD //-->

        <!--main -->
        <form method="POST" action="">
        <div>
            <table class="table table-striped-columns h-25 mt-5 m-2 container mx-auto">
                <thead>
                    <tr>
                        <th scope="col">teams</th>
                        <th scope="col">FINALIZADO</th>
                        <th scope="col">PARTIDO 9</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        <tr>
                            <th scope="row"><img  src="./images/morocco.png" alt="">MARRUCOS</th>
                            <td><input type="number" name="Moroco_1" min="1"> - <input type="number" name="Croatiat_1" min="1">
                            </td>
                            <td>CROACIA <img  src="./images/Croatia.png" alt=""></td>
                        </tr>
                    </div>
                    <tr>
                        <th scope="row"><img id="img" src="./images/belgium.png" alt="">BELGICA</th>
                        <td><input type="number" name="Belgica_1" min="1"> - <input type="number" name="Canada_1" min="1">
                        </td>
                    
                        <td>CANADA <img  src="./images/canada.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row"><img id="img" src="./images/belgium.png" alt="">BELGICA</th>
                        <td><input type="number" name="Belgica_2" min="1"> - <input type="number" name="Moroco_2" min="1"></td>
                        <td>MARRUCOS<img src="./images/morocco.png" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row"><img id="img" src="./images/Croatia.png" alt="">CROATIA</th>
                        <td><input type="number" name="Croatia_2" min="1"> - <input type="number" name="Canada_2" min="1"> </td>

                        <td>canada <img src=" ./images/canada.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row"><img id="img" src="./images/Croatia.png" alt="">CROATIA</th>
                        <td><input type="number" name="Croatia_3" min="1"> - <input type="number" name="Belgica_3" min="1">
                        </td>
                        <td>BELGICA <img  src="./images/belgium.png" alt=""></td>
                    </tr>
                    <tr>
                        <th scope="row"><img id="img" src="./images/canada.jpg" alt="">CANADA</th>
                        <td><input type="number" name="Canada_3" min="1"> - <input type="number" name="Moroco_3" min="1">
                        </td>
                        <td>MOROCO <img  src="./images/morocco.png" alt=""></td>
                    </tr>
                </tbody>
            </table>
            <!-- <button type="submit" name="send">send</button> -->
            <div class="text-center">


                <!--2  -->
                <section class="d-flex flex-column  m-2 container mx-auto ">
                    <h2 class="text-center ">WINNER TABLE</h2>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="submit" class="btn  w-25 container" value="SIMULATE" name="send" style="background: #8A1538;">
    </form>

    <!-- SCRIPT PHP -->
    <?php              
    if (isset($_POST['send'])) { # send data form
        $Moroco_1 = $_POST['Moroco_1'];
        $Croatiat_1 = $_POST['Croatiat_1'];
        $Belgica_1 = $_POST['Belgica_1'];
        $Canada_1 = $_POST['Canada_1'];
    
        $Moroco_2 = $_POST['Moroco_2'];
        $Belgica_2 = $_POST['Belgica_2'];
        $Croatia_2 = $_POST['Croatia_2'];
        $Canada_2 = $_POST['Canada_2'];
    
        $Croatia_3 = $_POST['Croatia_3'];
        $Belgica_3 = $_POST['Belgica_3'];
        $Canada_3 = $_POST['Canada_3'];
        $Moroco_3 = $_POST['Moroco_3'];
    
        $Equipe = array ("EQ-1" => "MOROCO" , "EQ-2" => "CROATIA" , "EQ-3" => "BELQIQU" , "EQ-3" => "CANADA");
        $point = array("MARRUECOS" => 0 , "CROATIE" => 0 ,  "CANADA" => 0, "BELQIQUE" => 0);
        $matches = array("MARRUECOS" => 0, "CROATIE" => 0 ,  "CANADA" => 0, "BELQIQUE" => 0);
        $GaGnant = array('MARRUECOS' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELQIQUE' => 0);
        $EMP = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
        $PER = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
        $goal = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
        $goal_C = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);

        #=====================================================
        if($Moroco_1 != "" && $Croatiat_1 != "") {
            $matches['MARRUECOS'] += 1;
            $matches['CROATIE'] += 1;
            $goal["MARRUECOS"] += $Moroco_1;
            $goal["CROATIE"] += $Croatiat_1;
            $goal_C["CROATIE"] += $Moroco_1;
            $goal_C["MARRUECOS"] += $Croatiat_1;
            
        }
        if ($Moroco_1 > $Croatiat_1) {
            $point['MARRUECOS'] += 3 ;
            $GaGnant['MARRUECOS'] += 1 ;
            $PER['CROATIE'] += 1 ;
        }
        elseif ($Moroco_1 < $Croatiat_1) {
            $point['CROATIE'] += 3 ;
            $GaGnant['CROATIE'] += 1 ;
            $PER['MARRUECOS'] += 1 ;
        }else {
            $point['MARRUECOS'] += 1 ;
            $point['CROATIE'] += 1 ;
            $EMP['MARRUECOS'] += 1 ;
            $EMP['CROATIE'] += 1 ;
        }
    
        #=====================================================
        if ($Belgica_1 != "" && $Canada_1 != "") {
            $matches['BELQIQUE'] += 1;
            $matches['CANADA'] += 1;
            $goal["BELQIQUE"] += $Belgica_1;
            $goal["CANADA"] += $Canada_1;
            $goal_C["CANADA"] += $Belgica_1;
            $goal_C["BELQIQUE"] += $Canada_1;
        }
        if($Belgica_1 > $Canada_1 ){
            $point["BELQIQUE"] += 3;
            $GaGnant['BELQIQUE'] += 1 ;
            $PER['CANADA'] += 1 ;
        }
        elseif ($Belgica_1  < $Canada_1 ){
            $point["CANADA"] += 3;
            $GaGnant['CANADA'] += 1 ;
            $PER['BELQIQUE'] += 1 ;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["CANADA"] += 1;
            $EMP['BELQIQUE'] += 1 ;
            $EMP['CANADA'] += 1 ;
        }
        
        #=====================================================
        if ($Moroco_2 != "" && $Belgica_2 != "") {
            $matches['MARRUECOS'] += 1;
            $matches['BELQIQUE'] += 1;
            $goal["BELQIQUE"] +=  $Belgica_2;
            $goal["MARRUECOS"] += $Moroco_2;
            $goal_C["MARRUECOS"] +=  $Belgica_2;
            $goal_C["BELQIQUE"] += $Moroco_2;
        }
        if($Belgica_2 > $Moroco_2 ){
            $point["BELQIQUE"] += 3;
            $GaGnant['BELQIQUE'] += 1 ;
            $PER['MARRUECOS'] += 1 ;
        }
        elseif ($Belgica_2  < $Moroco_2 ){
            $point["MARRUECOS"] += 3;
            $GaGnant['MARRUECOS'] += 1 ;
            $PER['BELQIQUE'] += 1 ;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["MARRUECOS"] += 1;
            $EMP['MARRUECOS'] += 1 ;
            $EMP['BELQIQUE'] += 1 ;
        }
        #=====================================================
        if ($Croatia_2 != "" &&  $Canada_2 != "") {
            $matches['CROATIE'] += 1;
            $matches['CANADA'] += 1;
            $goal["CANADA"] +=  $Canada_2 ;
            $goal["CROATIE"] += $Croatia_2 ;
            $goal_C["CROATIE"] +=  $Canada_2 ;
            $goal_C["CANADA"] += $Croatia_2 ;
        }
        if($Croatia_2 > $Canada_2 ){
            $point["CROATIE"] += 3;
            $GaGnant['CROATIE'] += 1 ;
            $PER['CANADA'] += 1 ;
        }
        elseif ($Croatia_2  < $Canada_2 ){
            $point["CANADA"] += 3;
            $GaGnant['CANADA'] += 1 ;
            $PER['CROATIE'] += 1 ;
        }
        else {
            $point["CROATIE"] += 1;
            $point["CANADA"] += 1;
            $EMP['CANADA'] += 1 ;
            $EMP['CROATIE'] += 1 ;
        }
        #=====================================================
        if ($Croatia_3 != "" &&  $Belgica_3 != "") {
            $matches['CROATIE'] += 1;
            $matches['BELQIQUE'] += 1;
            $goal["BELQIQUE"] +=  $Belgica_3 ;
            $goal["CROATIE"] += $Croatia_3 ;
            $goal_C["CROATIE"] +=  $Belgica_3 ;
            $goal_C["BELQIQUE"] += $Croatia_3 ;
        }
        if($Croatia_3 > $Belgica_3 ){
            $point["CROATIE"] += 3;
            $GaGnant['CROATIE'] += 1 ;
            $PER['BELQIQUE'] += 1 ;
        }
        elseif ($Croatia_3  < $Belgica_3 ){
            $point["BELQIQUE"] += 3;
            $GaGnant['BELQIQUE'] += 1 ;
            $PER['CROATIE'] += 1 ;
        }
        else {
            $point["CROATIE"] += 1;
            $point["BELQIQUE"] += 1;
            $EMP['BELQIQUE'] += 1 ;
            $EMP['CROATIE'] += 1 ;
        }
        #=====================================================
        if ($Moroco_3 != "" && $Canada_3 != "") {
            $matches['MARRUECOS'] += 1;
            $matches['CANADA'] += 1;
            $goal["CANADA"] +=  $Canada_3 ;
            $goal["MARRUECOS"] += $Moroco_3 ;
            $goal_C["MARRUECOS"] +=  $Canada_3 ;
            $goal_C["CANADA"] += $Moroco_3 ;
        }
        if($Canada_3 > $Moroco_3 ){
            $point["CANADA"] += 3;
            $GaGnant['CANADA'] += 1 ;
            $PER['MARRUECOS'] += 1 ;
        }
        elseif ($Canada_3  < $Moroco_3 ){
            $point["MARRUECOS"] += 3;
            $GaGnant['MARRUECOS'] += 1 ;
            $PER['CANADA'] += 1 ;
        }
        else {
            $point["CANADA"] += 1;
            $point["MARRUECOS"] += 1;
            $EMP['MARRUECOS'] += 1 ;
            $EMP['CANADA'] += 1 ;
        }
        # deferonce
        $DEF_M =  $goal["MARRUECOS"] - $goal_C["MARRUECOS"];
        $DEF_CR =  $goal['CROATIE'] - $goal_C['CROATIE'];
        $DEF_CA =  $goal['CANADA'] -  $goal_C['CANADA'];
        $DEF_B =  $goal['BELQIQUE'] - $goal_C['BELQIQUE'];

        # storage DATA in array
        $storage= array( 
            array("Equipe" => "MARRUECOS", "PT" => $point['MARRUECOS'], "PAR" => $matches['MARRUECOS'], "GAN" => $GaGnant['MARRUECOS'], "EMP" => $EMP['MARRUECOS'], "PER" => $PER['MARRUECOS'],   "G.F"  => $goal["MARRUECOS"], "G.C" => $goal_C["MARRUECOS"], "DEF" => $DEF_M ),
            array("Equipe" => 'CROATIE',   "PT" => $point['CROATIE'],   "PAR" => $matches['CROATIE'],   "GAN" => $GaGnant['CROATIE'],   "EMP" => $EMP['CROATIE'],   "PER" => $PER['CROATIE'] ,    "G.F"  => $goal['CROATIE'],   "G.C" => $goal_C['CROATIE'],   "DEF" => $DEF_CR   ),
            array("Equipe" => 'CANADA',    "PT" => $point['CANADA'],    "PAR" => $matches['CANADA'],    "GAN" => $GaGnant['CANADA'],    "EMP" => $EMP['CANADA'],    "PER" => $PER['CANADA'] ,     "G.F"  => $goal['CANADA'],    "G.C" => $goal_C['CANADA'],    "DEF" => $DEF_CA ),
            array("Equipe" => 'BELQIQUE',  "PT" => $point['BELQIQUE'],  "PAR" => $matches['BELQIQUE'],  "GAN" => $GaGnant['BELQIQUE'],  "EMP" => $EMP['BELQIQUE'],  "PER" => $PER['BELQIQUE'] ,   "G.F"  => $goal['BELQIQUE'],  "G.C" => $goal_C['BELQIQUE'],  "DEF" => $DEF_B )
        );

        // Sort the array
        usort($storage, function($a, $b){
            if($a["PT"] == $b["PT"]){
                if($a["DEF"] == $b["DEF"]){
                    return $a["G.C"] < $b["G.C"]? 1 : -1;
                }
                return $a["DEF"] < $b["DEF"]? 1 : -1;
            }
            return $a["PT"] < $b["PT"]? 1 : -1;
        });
    }

    if (isset( $_POST['send'])){
        echo "<div  class='table-responsive{-sm|-md|-lg|-xl|-xxl} mt-4'> 
        <table style=' border-collapse:separate;border-spacing:0 10px; ' class='table text-center align-middle table-bordered ' >
        <thead style='border: #7b6fff  solid 1px; background-color: #000;' class='text-light'> 
            <tr > 
            <th class='w-25'>#</th>
            <th class='w-25'>PTS</th>
            <th class='w-25'>PAR</th>
            <th class='w-25'>GAN</th>
            <th class='w-25'>EMP</th>
            <th class='w-25'>PER</th>
            <th class='w-25'>G.F</th>
            <th class='w-25'>G.C</th> 
            <th class='w-25'>+/-</th> 
            </tr>
        </thead>";
        foreach ($storage as $row){
            echo "<tr>";
            echo "<td>" .  $row['Equipe'] .  "</td>";
            echo "<td>" .  $row['PT']     .  "</td>";
            echo "<td>" .  $row['PAR']    .  "</td>";
            echo "<td>" .  $row['GAN']    .  "</td>";
            echo "<td>" .  $row['EMP']    .  "</td>";
            echo "<td>" .  $row['PER']    .  "</td>";
            echo "<td>" .  $row['G.F']    .  "</td>";
            echo "<td>" .  $row['G.C']    .  "</td>";
            echo "<td>" .  $row['DEF']    .  "</td>";
            echo "</tr>";
        }
    }
    ?>
</body>
</html>