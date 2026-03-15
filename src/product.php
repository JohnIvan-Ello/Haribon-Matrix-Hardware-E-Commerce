
 <!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'dashboard.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>product </title>

    <style>
        body{
            background-image: url('bg.jpg');
        }

        .horizontal {
            position: absolute; 
            left: 50%; 
            transform: translateX(-50%); 
            width: 85.5%; 
            height: 3px; 
            background-color: #FFAC20;
            opacity: 30%;
            top: 34%;
        }
        
        .halaman{
        position: absolute;
        justify-content: center;
        align-items: center;
        width: 1000px;
        left: 490px;
        padding: 20px;
    }
        h1{
            color: white;
    font-size: 60px;
    font-weight: 850;
    position: absolute;
    bottom: 0;
    left: 41%;
    top: 37%;
    }
        

    
    .stock {
        color: white;
        font-size: 40px;
        top: 500px;
        position: absolute;
        right: 53%;
        margin-top: 50px;
        }

        .price {
        color: gold;
        font-size: 50px;
        top: 600px;
        position: absolute;;
        right: 52.5%;
        margin-top: 20px;
        }
        
        
        .button:hover {
        background-color: #ccc;
        }

        .drop {
        position: absolute;
        top: 90%;
        right: 45%;
    }

    .labelq {
        position: absolute;
    top: 84%;
    right: 72%;
    color: white;
    font-size: 46px;
    }

    .button-container1 {
    position: absolute;
    margin-top: 100px;
    width: 200px;
    height: 250px;
    font-size: 30px;
    padding: 30px;
    }

    .button {
    background-color: #e0e0e0;
    padding: 12px;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    border: 10px solid #FFAC20;
    font-weight: bold;
    width: 60%;
    }


   .quantity-button .next {
        position: absolute;
        font-size: 18px;
        color: #FFAC20;
        background-color: #105652;
        width: 150px;
        height: 20px;
        padding: 15px 15px;
        border-radius: 35px;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        bottom: 20px;
        right: 200px;
      
    }


.size {
    position: relative;
    top: 100px;
    right: 287px;
    font-size: 20px;
}
.labelr{
    position: absolute;
    top: 90%;
    right: 59%;
}

.product-img {
    object-fit: contain;
    position: absolute;
    width: 23%;
    border-radius: 21px;
    margin-left: 17%;
    margin-top: 11%;
}

.buttonsss {
    margin-left: 53%;
}

.button-sm {
    position: absolute;
    margin-top: 26%;
    width: 10%;
    right: 55%;
}
.button-md {
    position: absolute;
    margin-top: 26%;
    width: 10%;
    right: 44%;
}
.button-lg {
    position: absolute;
    margin-top: 26%;
    width: 10%;
    right: 33%;
}

.label-sz {
    color: white;
    font-size: 49px;
    top: 69.1%;
    position: absolute;
    left: 21%;
}

.plus {
    font-size: 34px;
    position: absolute;
    top: 84%;
    right: 62%;
    padding: 2px;
    width: 63px;
    border: 8px solid #FFAC20;
}
.value {
    font-size: 34px;
    position: absolute;
    top: 84%;
    right: 56%;
    padding: 2px;
    width: 137px;
    border: 8px solid #FFAC20;
}
.minus {
    font-size: 34px;
    position: absolute;
    top: 84%;
    right: 53.5%;
    padding: 2px;
    width: 63px;
    border: 8px solid #FFAC20;
}


    </style>
</head>
<body>
        <img class = "halaman" src="step1.png">
        <div class="horizontal"></div>
        <h1>Product Name</h1>

        <img src="prod.jpg" class="product-img" alt="Product Image">

   <div class="stock">
    <p>STOCK</p>
   </div>

   <div class="price">
    <p>PRICE</p>
   </div>


    <div class="button-container">
    <br>
      <label class="label-sz" for="labelr">Size</label>
      <div class="buttonsss">
          <button class="button button-sm">Small</button>
          <button class="button button-md">Medium</button>
          <button class="button button-lg">Large</button>
          </div>
    </div>

<div class="quantity">
<br>
    <label class="labelq" for="quantity">Quantity:</label>
    <button class="plus">+</button>
    <button class="value">1</button>
    <button class="minus">-</button>
    <br>
</div>

<div class="quantity-button">
<a class="next" href = "2ndpage.php"> Next</a>
</div> 
</body>
</html>
