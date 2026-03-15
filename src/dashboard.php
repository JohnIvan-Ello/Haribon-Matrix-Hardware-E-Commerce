<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
?>

<html>
<head>
    <title>Checkout</title>
    <link rel="shortcut icon" type="image" href="logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=League Spartan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            margin: 0%;
        }

        #first {
            background: #1D5045;
            display: flex;
            justify-content: space-around;
            border-bottom: solid 1px #EFE9DD;
        }

        #home a:hover {
            animation: animate 3s linear infinite;
        }

        @keyframes animate {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        #home img {
            margin: 3px;
            margin-top: 7px;
            width: 350px;
            margin-right: 600px;
        }

        #profile img {
            position: absolute;
            right: 1%;
            margin-top: 15px;
            width: 50px;
        }

        #cart img {
            position: absolute;
            right: 170px;
            margin-top: 20px;
            width: 40px;
        }

        #second {
            background: #0E1F20;
            display: flex;
            justify-content: space-around;
            border-bottom: solid 1px #EFE9DD;
        }

        #tabs {
            width: 80%;
            display: flex;
            justify-content: space-between;
        }

        #tabs a {
            text-decoration: none;
            color: white;
            background-color: #105652;
            font-size: 1.6em;
            font-family: "League Spartan";
            font-weight: 900;
            padding: 7px 40px 0;
            border: solid 0px #105652;
            border-radius: 20px;
            margin: 10px;
            transition: 500ms;
        }

        #tabs a:hover {
            background: #FFAC20;
            color: floralwhite;
            scale: 10px;
        }

        #profile menu {
            position: absolute;
            top: 20px;
            right: -10px;
            padding: 10px;
        }

        .dropdown {
            font-family: "League Spartan";
            font-weight: 900;
            color: white;
            position: relative;
            right: -120px;
            top: 30px;
        }

        .drop-air {
            font-size: 1.6em;
        }

        li {
            float: left;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
<nav id="first">
    <div id="home"><a href="index.php"><img src="logos.png"></a></div>
    <div id="cart"><a href="cart.php"><img src="cart.png"></a></div>
    <div class="dropdown">
        <span class="drop-air">Account ▼</span>
        <div class="dropdown-content">
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<a href="profile.php">Edit Profile</a>';
                echo '<a href="logout.php">Log Out</a>';
            } else {
                echo '<a href="signinsignup.php">Sign In</a>';
            }
            ?>
    </div>
</div>
</nav>

<nav id="second">
    <div id="tabs">
        <a href="electricals.php">ELECTRICAL</a>
        <a href="handtools.php">HAND TOOLS</a>
        <a href="lawn.php">LAWN & GARDEN</a>
        <a href="paints.php">PAINTS & SUNDRIES</a>
        <a href="housewares.php">HOUSEWARES</a>
    </div>
</nav>
</body>
</html>
