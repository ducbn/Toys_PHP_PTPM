<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Baloo 2', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://hinhneniphone.net/wp-content/uploads/2024/11/anh-dai-dien-hinh-nen-dien-thoai-labubu.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
        }
        .container {
            max-width: 700px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #ff5722;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 25px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .btn {
            padding: 12px 28px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            color: white;
            border-radius: 30px;
            transition: 0.3s;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-login {
            background: #ff9800;
        }
        .btn-login:hover {
            background: #f57c00;
        }
        .btn-register {
            background: #03a9f4;
        }
        .btn-register:hover {
            background: #0288d1;
        }
        .toy-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="toy-icon">🧸🚗🎠</div>
        <h1>Chào mừng bạn!</h1>
        <p>Hãy khám phá thế giới đồ chơi đầy màu sắc và thú vị!</p>
        <div class="btn-container">
            <a href="{{ route('login') }}" class="btn btn-login">Đăng nhập</a>
            <a href="{{ route('register') }}" class="btn btn-register">Đăng ký</a>
        </div>
    </div>
</body>
</html>
