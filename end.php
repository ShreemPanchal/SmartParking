<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

       .container {
            text-align: center;
        }

       .checkmark-circle {
            width: 100px;
            height: 100px;
            position: relative;
            display: inline-block;
            vertical-align: middle;
            border-radius: 50%;
            background-color: #4caf50;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            animation: circle-scale 1s ease-out forwards;
        }

       .checkmark-circle::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            background: linear-gradient(45deg, #4caf50, #8bc34a, #4caf50, #8bc34a);
            background-size: 300% 300%;
            animation: gradient 2s linear infinite;
            z-index: -1;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

       .checkmark {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80px;
            height: 80px;
            transform: translate(-50%, -50%);
            opacity: 0;
            animation: draw 1s ease-in-out forwards;
            animation-delay: 1s;
        }

       .checkmark svg {
            width: 100%;
            height: 100%;
        }

        @keyframes circle-scale {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            80% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes draw {
            0% {
                opacity: 0;
                stroke-dasharray: 0 100;
                stroke-dashoffset: 0;
            }
            50% {
                opacity: 1;
                stroke-dasharray: 50 50;
                stroke-dashoffset: 25;
            }
            100% {
                opacity: 1;
                stroke-dasharray: 100 0;
                stroke-dashoffset: 0;
            }
        }

        h1 {
            margin-top: 20px;
            color: #333;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
            animation-delay: 1.5s;
        }

       .info-box {
            background-color: #fff;
            border: 1px solid black;
            padding: 5px;
            width: 170px;
            margin: 32px auto;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius:5px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<?php
    
    ?>
    <div class="container">
        <div class="checkmark-circle">
            <div class="checkmark">
                <svg viewBox="0 0 52 52">
                    <path d="M14 26l10 10 16-16" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <h1>Your slot has been booked!</h1>
        <div class="info-box">
            
            <p><b>Date:</b> <?php echo date("d-m-Y");?></p>
            <p><b>time:</b> <?php echo date("H:i:s");?></p>
        </div>
    </div>
   
</body>
</html>