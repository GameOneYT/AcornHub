<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcornHub Search Page</title>
    <link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <?php include("resources/other/google-scripts.php")?>


</head>

<body>

    <?php include("resources/php/header-wrapper.php") ?>
    <?php include 'search_data.php' ?>

    <div id="all-posts">
        <?php echo(get_searchPosts())?>
    </div>
    <!-- <?php include("resources/php/footer.php") ?> -->

</body>

</html>