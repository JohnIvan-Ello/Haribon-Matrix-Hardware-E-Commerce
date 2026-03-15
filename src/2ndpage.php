    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require 'dashboard.php'; ?>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
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
        
        .vertical {
            position: absolute; 
            left: 50%; 
            width: 2px; 
            height: 60vh; 
            background-color: #FFAC20;
            opacity: 30%;
            top: 37vh;
        }

        .container {
            position: absolute;
            top: 68%;
            left: 33%;
            transform: translate(-50%, -50%);
            text-align: center;
            line-height: 50px;
            font-size: 25px;
            font-family: Arial;
            font-weight: bold;
            text-transform: uppercase;
            color:  #FFAC20;
        }

        .sum {
            margin-bottom: 10px ;
            position: relative;    
            margin-right: 90px; 
        }

        .pic {
            margin-top: 25px;
            margin-bottom: 45px;
            
        }

        .del {
            margin-top: 0;
            margin-bottom: 40px;
        }

        textarea {
            width: 350px;
            font-size: 20px;
            resize: none;
            height: 100px;
            padding-left: 10px;
            margin-left: 15px;
            border: solid 7px #FFAC20;
            outline: none;
            font-family: arial;
        }

        .address-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 50px;
            position: relative;
            top: 40px;
        }

        
        .instructions-container p {
            margin-right: 20px;
        }
        
        .fa-solid {
            margin-right: 8px;
            margin-bottom: 40px;
        }

        .instructions-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-left: 20px;
           
        }
        
        .ude {
            margin-right: 8px;
            color:#FFAC20;
            margin-top: 25px;
        }

        .shipping {
        position: relative;
        justify-content: center;
        align-items: center;
        height: 30vh;
        width: 30vw;
        left: 55%;
        top: 163px;
        font-size: 25px;
        color: #FFAC20;
        font-weight: bold; 
        line-height: 50px;  
        font-family: arial;
        padding-left: 40px; 
        }
        h1{
            font-size: 25px;
            margin-right: 20px;
        }

        .shipping p { 
            font-size: 22px;  
            position: relative;
            left: 50px;
    

        }

        .shipping .truck{
        position: relative;
        top: 62px;
        right: 65px;
        }

        .radio-button{
        display: inline-block ;
        position: relative;
        left: 300px;
        bottom: 105px;
        margin-top: 5px;  
        width: 400px;
        
        }

    
        #bilog {
        height: 25px;
        width: 25px;
        position: relative;
        z-index: 2;
        }

        #sirkel{
        height: 25px;
        width: 25px;
        }


        .payment {
        position: relative;
        justify-content: center;
        align-items: center;
        height: 30vh;
        width: 30vw;
        left: 55%;  
        top: 70px;
        font-size: 25px;
        color: #FFAC20;
        font-weight: bold; 
        line-height: 50px;  
        font-family: arial;
        padding-left: 40px; 
        }

        h1{
            font-size: 25px;
            margin-right: 20px;
        }

        .payment p { 
            font-size: 22px;  
            position: relative;
            left: 25px;
        }

        .payment .card{
        position: relative;
        top: 62px;
        right: 65px;
        }   

        .resip{
            position: relative;
        justify-content: center;
        align-items: center;
        height: 30vh;
        width: 30vw;
        left: 53%;
        top: 50px;
        font-size: 25px;
        color: #FFAC20;
        font-weight: bold; 
        line-height: 50px;  
        font-family: arial;
        padding-left: 40px; 
        }

        .payment-details {
    padding: 10px;
    width: 300px;
    position: absolute;
    left: 56%;
    line-height: 20px;
    bottom: 30px;

    }
    .payment-details i{
    position: relative;
    top: 48px;
    font-size: 40px;
    right: 50px;
    }

    .payment-details h2 {
    margin-top: 0; 
    font-size: 25px;
    color: #FFAC20;
    font-weight: bold; 
    font-family: arial;
    letter-spacing: 2px;
    margin-bottom: 30px;

    
    }

    .subtotal {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    }

    .total {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    font-weight: bold;
    background-color:  #105652;
    width: 280px;
    padding: 20px;
    color: white;
    font-family: arial;


    }

    .amount {
    font-family: Arial, sans-serif;
    color: #FFAC20;   
    }



    .subtotal span{
        line-height: 10px;
        color: white;
    }

    .subtotal span:first-child {
    flex: 1;
    }

    .subtotal span:last-child {
    margin-left: 10px;
    }

    .total span:first-child {
    flex: 1;
    font-size: 18px;
    }

    .total span:last-child {
    margin-left: 10px;
    font-size: 18px;
    }
    
    .previous-button,
     .next-button {
        position: relative;
        font-size: 18px;
        text-decoration: none;
        background-color: #105652;
        width: 150px;
        height: 20px;
        padding: 15px 15px;
        border-radius: 35px;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
        
    }

    .previous-button{
        position: absolute;
        right: 1120px;
        top: 210px;

        
        
    }
    .next-button{
        position: absolute;
        left: 550px;
        top: 210px;

    
    }

    .hakdog{
        position: absolute;
        justify-content: center;
        align-items: center;
        width: 1000px;
        left: 490px;
        padding: 20px;

    }
    
    #dev{
        position: relative;
        top: 10px;
    }

    </style>
    <body>
        <img class = "hakdog" src="step2.png">
        <div class="horizontal"></div>
        <div class="vertical"></div>
        <div class="container">
            <p class="sum">summary of order</p>
            <img class="pic" src="" alt="PRODUCT IMAGE">
            <div class="address-container">
                <i class="fa-solid fa-location-dot fa-xl" style="color: #ffac20;"></i>
                <p class="del">delivery of address</p>
                </div>
                <textarea name="message" id="dev" cols="20" rows="5" placeholder="Enter your text here"></textarea>
            <div class="instructions-container">
                <i class="ude fa-solid  fa-pen-to-square fa-xl"></i>
                <p>additional instructions</p>
            </div>
            <textarea name="message" id="" cols="20" rows="5" placeholder="Enter your text here"></textarea>
        </div>

        <div class="shipping">  
            <i class="truck fa-solid fa-truck-fast fa-xl" style="color: #ffac20;"></i>
            <h1> SHIPPING METHOD</h1>
            <p> PICK-UP</p>       
            <p>DELIVERY</p>
            <label class="radio-button">
                <input id ="bilog"value="option1" name="radio1" type="radio">    
                </label>
                <label class="radio-button">
                <input id ="bilog" svalue="option1" name="radio1" type="radio">    
                </label>
            </div>

            <div class="payment">
            <i class="card fa-solid fa-credit-card fa-xl" style="color: #ffac20;"></i>
            <h1> PAYMENT METHOD</h1>
            <p> CASH ON DELIVERY</p>       
            <p>GCASH</p>  
            <label class="radio-button">
                <input id = "sirkel"value="option1" name="example-radio" type="radio">    
                </label>
                <label class="radio-button">
                <input id = "sirkel" svalue="option1" name="example-radio" type="radio">    
                </label>
            </div>
        <div class="payment-details">
        <i class="fa-solid fa-file-lines fa-xl" style="color: #ffac20;"></i>
                <h2>PAYMENT DETAILS</h2>
                <div class="subtotal">
                    <span>Merchandise Subtotal</span>
                    <span class="amount">₱ 0.00</span>
                </div>
                <div class="subtotal">
                    <span>Shipping Subtotal</span>
                    <span class="amount">₱ 0.00</span>
                </div>
                <div class="subtotal">
                    <span>Handling fee</span>
                    <span class="amount">₱ 0.00</span>
                </div>
                <div class="total">
                    <span>TOTAL PAYMENT</span>
                    <span class="amount">₱ 0.00</span>
                </div>

        <div class="navigation">
            <a class="previous-button" href = "product.php" > Previous</a>
            <a class="next-button" href = "ude.php"> Next</a>
            </div>
            </div>              
    </body>
    </html>