

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: #667eea;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }

        h2 {
            margin-bottom: 10px;
            color: #333;
            font-size: 28px;
        }

        p {
            color: #777;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 45px 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
        }

        .input-group input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-forgot label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .remember-forgot a {
            color: #667eea;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #5a6fd8;
        }

        .footer-text {
            margin-top: 25px;
            font-size: 13px;
            color: #999;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <i class="fas fa-shield-alt"></i>
        </div>
        <h2>Admin Login</h2>
        <p>Enter your credentials to access the dashboard</p>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fas fa-lock"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
        
        @if($errors->any())
            <div style="margin-top:12px; color:#cc3333; text-align:left; max-width:320px; margin-left:auto; margin-right:auto;">
                <ul style="list-style:disc; padding-left:18px;">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
                </ul>
            </div>
        @endif

            <button type="submit">Login to Dashboard</button>
        </form>

        <div class="footer-text">
            © 2025 Your Company • Secure Admin Panel
        </div>
    </div>
</body>
</html>