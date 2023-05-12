<?php
// include $_SERVER["DOCUMENT_ROOT"] . "/acornhub/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcornHub Profile Page</title>
    <link rel="shortcut icon" href="../resources/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/acornhub/resources/other/google-scripts.php" ?>
    
</head>

<body>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/acornhub/resources/php/header-wrapper.php"; ?>

    <?php require_once("build_user.php");
        if($row['count']!=1){ //if no user, or >1
            $upi = NULL;
            // header("Location: ".$_SERVER['HTTPS_HOST']."/acornhub/404/index.php?cause=nouser"); // don't redirect
            echo "<iframe width='100%' height='100%' src='/acornhub/404/main.php?cause=nouser'>";
        }
        else{
    ?>

    <div class="main-content">
        <div class="profile-content">
            <div class="profile-img"><?php echo(get_profileImg())?></div>
            <div class="profile-badgeBox">
                <div class="profile-badge"><?php echo(get_profileBadges())?></div>
            </div>
            <div class="profile-username"><h1><?php echo(get_profileUsername())?></h1></div>
            <div class="second-content">
                <div class="profile-description"><?php echo(get_profileDescription())?></div>
                
            </div>
        </div>
    </div>
    <div class="profile-posts"><?php echo(get_profilePosts())?></div>


    <!-- <?php include $_SERVER["DOCUMENT_ROOT"] . "/acornhub/resources/php/footer.php";?> -->
</body>

</html>
<?php } ?>