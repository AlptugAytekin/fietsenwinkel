<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php opdracht fiets</title>
</head>
<body>
    <?php
    include("fiets.php");

    $fiets = new Fiets(2, "Gazelle","zwart");
    echo '<h1>'.$fiets->getMerk().'</h1>';

    include("brommer.php");
    $brommer = new Brommer("Doohan Gelato","Snorfiets 50cc","oranje", "geen windscherm");
    echo '<h1>'.$brommer->getModel(). " " .$brommer->getUitvoering().'</h1>';
    $brommer->setImage("oranje.png");
    echo "<br />";
    echo "<img src='".$brommer->getImage()."' alt='oranje brommer'>";
    include("fietsenwinkel.php");
    $fietsenwinkel = new Fietsenwinkel();
    $fietsenwinkel->addFiets($fiets);
    $fiets = new Fiets(2, "Batavus","zwart");
    $fietsenwinkel->addFiets($fiets);
    $fietsen = $fietsenwinkel->getFietsen();

    $aantal = count($fietsen);
    for($i=0;$i<$aantal;$i++)
    {
        echo $fietsen[$i]->getMerk();
    }


    ?>
    </body>
    </html>

    

