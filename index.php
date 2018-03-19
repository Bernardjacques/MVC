<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Didier Motte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/header1.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/presentation.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/contact.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css"/>
    <script src="main.js"></script>
</head>
<body>
    <?php
        $page = isset($_GET['page'])?htmlentities($_GET['page']):'home';
        require_once('controller/controller.php');
    ?>
</body>
</html>