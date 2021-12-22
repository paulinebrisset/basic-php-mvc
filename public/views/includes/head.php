<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafé Parfé</title>

    <?php if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_POST['deconnection'])) {
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
    } ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/includes/styles.php' ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/includes/navbar.php' ?>
</head>