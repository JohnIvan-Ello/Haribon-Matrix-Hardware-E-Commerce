<!DOCTYPE html>
<html>
<head>
    <title>Gasoline Generator RD 3910E</title>
    <link rel="shortcut icon" type="image" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=League Spartan"> 
    <link rel="stylesheet" type="text/css" href="productpagestyles1.css">
    <?php require 'dashboard.php'; ?>
</head>
<body>
    <div class="backarrow"><a href="electricals.php"><img src="backarrow.png"></a></div>
    <div class="whole">
        <div id="content-wrapper">
            <div class="column">
                <img id="featured" src="images1/product1img.jpg">
                <div id="slide-wrapper">
                    <img id="slideLeft" class="arrow" src="images1/arrow-left.png">
                    <div id="slider">
                        <img class="thumbnail active" src="images1/product1img.jpg">
                        <img class="thumbnail" src="images1/product2img.jpg">
                        <img class="thumbnail" src="images1/product3img.jpg">
                    </div>
                    <img id="slideRight" class="arrow" src="images1/arrow-right.png">
                </div>
            </div>
            <div class="name">
                <h3><a href="index.php">Home</a>/<a href="electricals.php">Electrical</a></h3>
                <h1>Gasoline Generator RD 3910E</h1>
                <h2>₱32,999.00</h2>
                <form method="post" action="cart.php?action=add_to_cart&id=1">
                    <div class="addtocart">
                        <button type="submit" class="button" name="add_to_cart">ADD TO CART</button>
                    </div>
                </form>
            </div>
            <div class="productdescription">
                <h2>Product Description:</h2><br>
                <span>
                    <ul>
                        <li>3500 Surge watts</li><br>
                        <li>2800 running watts</li><br>
                        <li>100% copper</li><br>
                        <li>6.5HP OHV engine</li><br>
                        <li>Electric starting</li><br>
                        <li>25L tough steel fuel tank</li><br>
                        <li>10 hours runtime at 50% load</li><br>
                        <li>Power surge heavy duty alternator with AVR</li><br>
                    </ul>
                </span>
            </div>
        </div>
    </div>
    <div class="comment-box">
    <p> Add a comment</p>
    <form class="comment-form" method="POST" action="submit_comment.php">
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <textarea rows="4" placeholder="Write your comment..." name="comment"></textarea>
        <button type="submit">Post Comment</button>
    </form>
    </div>
    <script type="text/javascript">
        let thumbnails = document.getElementsByClassName('thumbnail')
        let activeImages = document.getElementsByClassName('active')

        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[i].addEventListener('mouseover', function () {
                console.log(activeImages)

                if (activeImages.length > 0) {
                    activeImages[0].classList.remove('active')
                }

                this.classList.add('active')
                document.getElementById('featured').src = this.src
            })
        }

        let buttonRight = document.getElementById('slideRight');
        let buttonLeft = document.getElementById('slideLeft');

        buttonLeft.addEventListener('click', function () {
            document.getElementById('slider').scrollLeft -= 180
        })

        buttonRight.addEventListener('click', function () {
            document.getElementById('slider').scrollLeft += 180
        })
    </script>
</body>
</html>
