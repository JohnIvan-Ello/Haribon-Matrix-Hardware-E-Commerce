    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require 'dashboard.php'; ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body{
                background-image: url('bg (3).jpg');
            }

            

        .container {
            position: absolute;
            display: column;
            left: 40%;
            top: 40%;
            width: 800px;
            height: 500px;
            font-family: Arial ;
        
        }

        .message {
            text-align: center;
            font-size: 100px;
            font-weight: bold;
            color: #FFAC20;
            width: 1100px;
            position: absolute;
            right: 50px;
            
        }


        .navigation a{
            
        position: absolute;
        font-size: 18px;
        color: #FFAC20;
        text-decoration: none;
        background-color: #105652;
        width: 150px;
        height: 20px;
        padding: 10px 10px;
        border-radius: 35px;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
        }

        .finish{
        position: absolute;
        right:  290px;
        bottom: 30px;
        font-style: normal;
    }

        </style>
    </head>
    <body>

    <div class="container">
            <div class="message">
        THANK YOU FOR ORDERING IN <br>
        HARIBON MATRIX !
    </div>


    </div>
    <div class="navigation">
    <a class="finish" href="index.php">finish</a>
            </div>       
    </body>
        
    </html>