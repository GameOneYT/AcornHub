<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>404 Error</title>
</head>

<body>
    <div class="background">
        <?php include("../resources/other/google-scripts.php") ?>
        <div id="header-wrapper">
            <div id="header-container">

                <a href="/acornhub"><img src="/acornhub/resources/img/logo(ua).png" alt="AcornHub" id="loggo"></a>

                <div id="div-searchbar">
                    <form method="GET" class="form-inline" action="search.php">
                        <input type="text" name="keyword" id="searchbar" placeholder="Search Acornhub" autocomplete="off">
                        <input type="submit" id="search-submit" name="search" value="Search">
                    </form>
                </div>
            </div>
        </div>
        <?php 
        require_once("main.php");
        ?>
    </div>
</body>

</html>