<?php
/**
 * Created by PhpStorm.
 * User: Adnan
 * Date: 2/27/2020
 * Time: 8:09 PM
 */

/*db connection created once in config.php*/
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web developer Test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awsome-->
    <link href="css/fontawsome.css" rel="stylesheet">
    <!--Font popins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--Custom Style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbgdark ">
        <div class="container">
            <a class="navbar-brand" href="">Adnan Hyder Pervez</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbgdark" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link"
                           href="https://docs.google.com/document/d/1L-o3XUnhfV7YSXOzW_Rgg1G3zyDr8fBOjaB93xfAABY/edit">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wordpress.org/plugins/techopialabs-backups/">MY WP PLUGIN</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="https://blog.helpyea.com" id="reg_opoc">MY Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="log_opoc" href="mailto:12345adnan@gmail.com">Contact Me</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Of Header -->

<!--content-->
<div class="container">
    <section class="service-sec" id="benefits">

        <div class="row">
            <div class="col-md-12">
                <div class="heading p-5">
                    <h2>
                        <small>Welcome</small>
                        Select The User From Dropdown to Fetch Posts
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <?php

    $sql = "SELECT id, first_name, last_name FROM user_info";
    $result = $conn->query($sql);
    ?>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="UserPost">Fetch Post</label>
            <select class="form-control" id="UserPost">
                <option>Select User</option>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        ?>
                        <option value="<?php echo $row["id"] ?>"><?php echo $row["first_name"] . " " . $row["last_name"] ?> </option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

    </div>
</div>
<!--closing db connection-->
<?php
$conn->close();
?>

<div class="container">
    <div class="col-md-12">
        <div class="loader" style="display: none"></div>
        <div class="mainposting">
            <div class="posting">
                <h1>Alice in Wonderland, part dos</h1>
                <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then
                    they
                    both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon
                    said to
                    the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
                    'Yes, we went to school in the sea, though you mayn't believe it—'
                    'I never said I didn't!' interrupted Alice.
                    'You did,' said the Mock Turtle.</p>

                <hr>
            </div>
            <div class="posting">
                <h1>Revolution has begun!</h1>
                <p>'I am bound to Tahiti for more men.'
                    'Very good. Let me board you a moment—I come in peace.' With that he leaped from the canoe, swam to
                    the
                    boat; and climbing the gunwale, stood face to face with the captain.
                    'Cross your arms, sir; throw back your head. Now, repeat after me. As soon as Steelkilt leaves me, I
                    swear
                    to beach this boat on yonder island, and remain there six days. If I do not, may lightning strike
                    me!'A
                    pretty scholar,' laughed the Lakeman. 'Adios, Senor!' and leaping into the sea, he swam back to his
                    comrades.</p>

                <hr>
            </div>
        </div>
    </div>
</div>

<!--end of content-->


<!-- Bootstrap core JavaScript -->
<script src="js/jquery.slim.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!--Custom Js-->
<script src="js/custom.js"></script>
</body>


</html>