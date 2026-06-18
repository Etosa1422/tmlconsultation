<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | TML Consulting Group</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        body {
            background: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .login-card {
            background: #fff;
            width: 100%;
            max-width: 420px;
            padding: 3.5rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
        }
        .login-card h1 {
            color: var(--tml-navy);
            margin-bottom: 2.5rem;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .form-group {
            text-align: left;
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #666;
        }
        .form-control {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1px solid #ddd;
            background: #fcfcfc;
            font-size: 1rem;
        }
        .btn-login {
            width: 100%;
            background: var(--tml-navy);
            color: #fff;
            border: none;
            padding: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 1rem;
        }
        .btn-login:hover { background: var(--tml-navy2); }
        .back-site {
            display: block;
            margin-top: 2rem;
            font-size: 0.875rem;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div style="margin-bottom: 2rem;">
             <span style="color:var(--tml-navy); font-weight:800; font-size:1.5rem; letter-spacing:0.1em;">TML</span>
             <br>
             <span style="color:var(--tml-gold); font-size:0.6rem; text-transform:uppercase; font-weight:700;">Admin Management Portal</span>
        </div>
        
        <h1>Admin Login</h1>
        
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Admin Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p style="color:red; font-size:0.75rem; margin-top:0.5rem;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            
            <button type="submit" class="btn-login">Login to Dashboard</button>
            
            <a href="/" class="back-site">&larr; Back to public site</a>
        </form>
    </div>
</body>
</html>
