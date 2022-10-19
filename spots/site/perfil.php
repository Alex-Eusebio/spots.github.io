<?php
    session_start();
    require_once('../other/classes.php');

    $id = $_GET['id'];

    $users=new Users;
    $result = $users->showOne($id);
    foreach($result as $row){
        $nome = $row["nome"];
        $pfp = $row["pfp"];
        $nivel = $row["nivel"];
        $mail = $row["mail"];
        $tele = $row["telemovel"];
        $join = $row["dataJoin"];
    }

    $estabs=new Estabs;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/divstruct.css" rel="stylesheet" type="text/css">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <title class="notranslate"><?=$nome?></title>
</head>
<body>
<?php include("../other/header.html");?>
<div id="main">
    <p class="h1 text-center text-capitalize notranslate"><?=$nome?></p>
    <div class="card mb-3">
        <div class="card-body">
        <li class="media">
            <img class="mr-3 estabLogo" src="../imgs/pfp/<?=$pfp?>" alt="Generic placeholder image">
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#128231; Email</span>
                </div>
                <input readonly type="text" class="form-control notranslate" aria-describedby="basic-addon1" value="<?=$mail?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">&#128241; Telemóvel</span>
                    </div>
                    <input readonly type="number" class="form-control notranslate" aria-describedby="basic-addon1" value="<?=$tele?>">
                </div>
                <div class="input-group mb-3">
                    <p class="card-text"><small>Entrou a <?=$join?></small>
                </div>
            </li>
            </ul>
        </li>
    </div>
    
    <div class="card mb-3">
        <p class="h1 text-center text-capitalize">Os seus estabelecimentos</p>
        <?php
        $result = $users->getEstabUser($id);
        foreach($result as $row){
            $id_ = $row["id"];
            $result = $estabs->showOne($id_);

            echo $estabs->infoEstabUser($result);
        } ?>
    </div>
</body>
</html>