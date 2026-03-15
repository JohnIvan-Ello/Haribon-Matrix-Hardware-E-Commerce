<!DOCTYPE html>
<html>
<head>
    <title>Haribon Matrix</title>
    <link rel="shortcut icon" type="image" href="logo.png" />
    <?php require 'dashboard.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1"></head>
    <style>
            *{
	        margin: 0%;
        }
        
        body {
            padding: 0;
            overflow-x: hidden;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        
        .image-section {
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 90vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }
        
        .image-section2 {
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .return-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #555;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        .return-to-top.show {
            display: block;
        }

        .learn-more {
            background-color: white;
            color: black;
            border: none;
            height: 70px;
            width: 210px;
            border-radius: 35px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: larger;
            cursor: pointer;
            position: absolute;
            left: 50%;
            bottom: 20%;
            transform: translateX(-50%);
            position: relative;
            top: 280px;
        }

        .arrow-left {
            background-color: white;
            color: black;
            border: none;
            height: 70px;
            width: 70px;
            border-radius: 35px;
            text-align: center;
            font-weight: bolder;
            font-size: xx-large;
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
        }

        .arrow-right {
            background-color: white;
            color: black;
            border: none;
            height: 70px;
            width: 70px;
            text-align: center;
            font-weight: bolder;
            font-size: xx-large;
            border-radius: 35px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
        }

        .return-to-top {
            display: none;
            position: fixed;
            bottom: 15%;
            left: 50%;
            z-index: 99;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #E19A1C;
            color: black;
            cursor: pointer;
            border: none;
            outline: none;
            transform: translateX(-50%);
        }

        .return-to-top.show {
            display: block;
        }

        .dots-container {
            position: fixed;
            bottom: 15%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            position: absolute;
        }

        .dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #bbb;
            margin: 0 5px;
            cursor: pointer;
            position: relative;
            top: 125px;
        }

        .active-dot {
            background-color: #555;
        }

        footer {
         display: flex;
         background-color: #E19A1C;
        }

        .footer-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex: 1;
            height: auto;
            width: 100%;
            padding: 0 3%;
        }

        .logo img{
            height: 75px;
            width: 375px;
        }

        .policy {
           padding-right: 15px;
           font-family: "League Spartan";
           font-weight: bold;
           font-size: 30px;
           padding-top: 13px;
           padding-bottom: 10%;
           color: black;
           text-decoration: none;
           outline: none;
        }

        .contact {
            padding-left: 15px;
            font-family: "League Spartan";
            font-weight: bold;
            font-size: 20px;
        }

        .icons {
            display: flex;
            justify-content: right;
            align-items: center;
        }

        .icons img{
            height: 25px;
            width: 25px;
            margin: 0 5px;
        }

        html {
           scroll-behavior: smooth;
        }   

        .haribonpolicy {
            position: absolute;
            top: 2700;
            right: 275px;
            border-right: 3px solid black;
        }

    </style>
</head>
<body>
    <div class="image-section" id="background-container" style="background-image: url(home1.png);">
      <a href="#section2"><button class="learn-more">LEARN MORE</button></a>
      <button id="arrow-left" class="arrow-left"><span>&#8249;</span></button>
      <button id="arrow-right" class="arrow-right"><span>&#8250;</span></button>
      <div id="dots-container" class="dots-container"></div>
    </div>
  
    <div id="section2" class="image-section2" style="background-image: url(mat.png);"></div>
    <div class="image-section2" style="background-image: url(mav.png);"></div>
  
    <button class="return-to-top" onclick="scrollToTop()">&#8593; </button>

    <script>
        const backgroundContainer = document.getElementById('background-container');
    const arrowLeft = document.getElementById('arrow-left');
    const arrowRight = document.getElementById('arrow-right');
    const dotsContainer = document.getElementById('dots-container');

    const images = ['home1.png', 'home3.png', "home2.png"];
    const totalImages = images.length;
    let currentImageIndex = 0;

    function changeBackgroundImageNext() {
        currentImageIndex = (currentImageIndex + 1) % totalImages;
        backgroundContainer.style.backgroundImage = `url(${images[currentImageIndex]})`;
        updateDots();
    }

    function changeBackgroundImagePrevious() {
        currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
        backgroundContainer.style.backgroundImage = `url(${images[currentImageIndex]})`;
        updateDots();
    }

    function updateDots() {
        const dots = Array.from(dotsContainer.children);
        dots.forEach((dot, index) => {
            if (index === currentImageIndex) {
                dot.classList.add('active-dot');
            } else {
                dot.classList.remove('active-dot');
            }
        });
    }

    for (let i = 0; i < totalImages; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dotsContainer.appendChild(dot);
    }

    dotsContainer.children[currentImageIndex].classList.add('active-dot');


    arrowLeft.addEventListener('click', changeBackgroundImagePrevious);
    arrowRight.addEventListener('click', changeBackgroundImageNext);

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        window.addEventListener('scroll', function() {
            var returnToTopButton = document.querySelector('.return-to-top');
            if (window.scrollY > 1400) {
                returnToTopButton.classList.add('show');
            } else {
                returnToTopButton.classList.remove('show');
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

<footer>
    <div class="footer-container">
        <a class="logo" href="index.php">
            <img src="footer-logo.png" alt="logo">
        </a>
        <div class="rights">© 2023 Haribon Matrix. All Rights Reserved.</div>
        <div class = "haribonpolicy">
           <a href="#section2" class="policy">Haribon Matrix Policy</a></div>
        <div class="icons">
        <span class="contact">Contact Us:</span>
           <a class="facebook" href="https://www.facebook.com/profile.php?id=100093420010072" target="_blank">
               <img src="fb.png" alt="facebook">
           </a>
           <a class="twitter" href="https://twitter.com/Haribon_Matrix" target="_blank">
               <img src="twitter.png" alt="twitter">
           </a>
           <a class="gmail" href="mailto:haribonmatrix@gmail.com" target="_blank">
               <img src="gmail.png" alt="gmail">
          </a>
    </div>
    
</footer>

</html>