<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            overflow-x: hidden;
        }


        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 153, 204, 0.7), rgba(255, 230, 204, 0.8));
            z-index: -1;
            animation: bg-animation 10s infinite alternate;
        }

        @keyframes bg-animation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }


        .title-section {
            padding: 40px 20px;
            color: #ff3399;
            font-family: 'Great Vibes', cursive;
            font-size: 4rem;
            text-shadow: 2px 2px 5px rgba(255, 153, 204, 0.7);
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.5); }
            100% { opacity: 1; transform: scale(1); }
        }


        .message-section {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            margin: 20px auto;
            width: 80%;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: slideIn 1.5s ease-in-out;
        }

        @keyframes slideIn {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .message-section h2 {
            font-family: 'Arial', sans-serif;
            font-size: 2rem;
            color: #ff6699;
            margin-bottom: 20px;
        }

        .message-section p {
            font-size: 1.2rem;
            color: #333;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(255, 102, 153, 0.4);
        }

    
        .card-wrapper {
            perspective: 1000px;
            margin-top: 50px;
        }

        .card {
            width: 320px;
            height: 450px;
            margin: 50px auto;
            transition: transform 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .card:hover {
            transform: rotateY(180deg);
        }

        .front, .back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .front {
            background: linear-gradient(to bottom, #ff99cc, #ffccff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .front h2 {
            font-size: 2rem;
            color: white;
            font-family: 'Great Vibes', cursive;
        }

        .front img {
            width: 80%;
            height: auto;
            border-radius: 15px;
        }

        .back {
            background: linear-gradient(to top right, #ffcc99, #ff9966);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .back p {
            font-size: 1.2rem;
            line-height: 1.8;
        }


        @keyframes floatUp {
            0% { opacity: 0; transform: translateY(100vh); }
            50% { opacity: 0.7; transform: translateY(-50vh); }
            100% { opacity: 0; transform: translateY(-150vh); }
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: pink;
            border-radius: 50%;
            animation: floatUp 10s infinite ease-in-out;
        }

   
        .heart.red { background-color: #FF4C4C; }
        .heart.pink { background-color: #FF66B2; }
        .heart.purple { background-color: #A36BC3; }
        .heart.blue { background-color: #66B2FF; }
        .heart.orange { background-color: #FFB266; }

        .heart::before, .heart::after {
            content: '';
            width: 20px;
            height: 20px;
            background-color: inherit; 
            border-radius: 50%;
            position: absolute;
        }

        .heart::before {
            top: -10px;
            left: 0;
        }

        .heart::after {
            top: 0;
            left: -10px;
        }

        footer {
            padding: 20px;
            color: #ff6699;
            font-size: 1rem;
            position: relative;
            z-index: 1;
        }

        footer p {
            text-shadow: 1px 1px 2px rgba(255, 153, 204, 0.7);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title-section">
            <h1>Chúc Mừng Ngày Phụ Nữ Việt Nam 20/10</h1>
        </div>

        <div class="message-section">
            <h2>Gửi lời chúc tốt đẹp nhất đến vợ Tuyết cụa tôi</h2>
            <p>Nhân ngày Phụ nữ Việt Nam 20/10, Xin gửi lời chúc tốt đẹp nhất đến với người tôi thương. Chúc em sẽ luôn tỏa sáng, kiêu hãnh như ánh mặt trời, trở thành phiên bản tốt nhất của chính mình. Chúc cho học tập công việc và cuộc sống sẽ thuận lợi, gặt hái được nhiều thành công. Và quan trọng nhất là chúc cho tình yêu của anh và em sẽ mãi mãi bền lâu, luôn cháy bỏng❤️‍🔥</p>
            <p>Yewww emmm💋💞</p>
        </div>

        <div class="card-wrapper">
            <div class="card">
                <div class="front">
                    <h2>Chúc mừng ngày 20/10</h2>
                    <img src="flower.jpg" alt="Flower">
                </div>
                <div class="back">
                    <p>Chúc vợ luôn xinh đẹp, mạnh mẽ và thành công! Hãy tỏa sáng như những đóa hoa hồng rực rỡ!</p>
                </div>
            </div>
        </div>

        <div class="heart red" style="top: 60%; left: 10%; animation-duration: 7s;"></div>
        <div class="heart pink" style="top: 80%; left: 20%; animation-duration: 9s;"></div>
        <div class="heart purple" style="top: 50%; left: 30%; animation-duration: 6s;"></div>
        <div class="heart blue" style="top: 70%; left: 40%; animation-duration: 8s;"></div>
        <div class="heart orange" style="top: 30%; left: 50%; animation-duration: 5s;"></div>
        <div class="heart red" style="top: 10%; left: 60%; animation-duration: 11s;"></div>
        <div class="heart pink" style="top: 20%; left: 70%; animation-duration: 12s;"></div>
        <div class="heart purple" style="top: 40%; left: 80%; animation-duration: 10s;"></div>

    </div>
</body>
</html>
