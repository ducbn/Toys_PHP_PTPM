<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            text-align: center;
        }
        .container {
            max-width: 600px;
        }
        h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .btn {
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            color: white;
            border-radius: 25px;
            transition: 0.3s;
        }
        .btn-login {
            background: #ff7eb3;
        }
        .btn-login:hover {
            background: #ff4f91;
        }
        .btn-register {
            background: #1e90ff;
        }
        .btn-register:hover {
            background: #0073e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng bạn!</h1>
        <p>Tham gia ngay để trải nghiệm những tính năng tuyệt vời nhất.</p>
        <div class="btn-container">
            <a href="{{ route('login') }}" class="btn btn-login">Đăng nhập</a>
            <a href="{{ route('register') }}" class="btn btn-register">Đăng ký</a>
        </div>
    </div>
</body>
</html>
