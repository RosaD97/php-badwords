<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div> Testo:
        <?php echo $_GET['testo'] ?>
    </div>
    <div> Testo con censura:
        <?php echo str_replace($_GET['censura'], "***", $_GET['testo']) ?>
        -La lunghezza del testo è:
        <?php echo strlen($_GET['testo']) ?>

    </div>

</body>

</html>