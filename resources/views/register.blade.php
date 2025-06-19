<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Bloodstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bloodstrap@1.0.0/dist/css/bloodstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #ff2d52;
            --primary-hover: #ff1a42;
        }
        
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .register-card {
            background: rgba(30, 30, 46, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease;
        }
        
        .register-card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
        }
        
        .card-header h3 {
            margin: 0;
            font-weight: 600;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(255, 45, 82, 0.25);
            color: white;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .btn-primary {
            background: var(--primary);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            width: 100%;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: rgba(255, 255, 255, 0.923);
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .divider::before {
            margin-right: 10px;
        }
        
        .divider::after {
            margin-left: 10px;
        }
        
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .login-link a:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 14px;
            color: rgba(255, 255, 255, 0.5);
        }
        
        .input-icon input {
            padding-left: 45px !important;
        }
        
        .select-role {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
            width: 100%;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='rgba(255,255,255,0.5)'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 15px;
        }
        
        .select-role:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(255, 45, 82, 0.25);
        }
        
        .password-strength {
            height: 5px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            margin-top: -15px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        
        .strength-meter {
            height: 100%;
            width: 0;
            background: var(--primary);
            transition: width 0.3s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="card-header">
                <h3><i class="fas fa-user-plus me-2"></i> Buat Akun</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3 input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                    </div>
                    
                    <div class="mb-3 input-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="mb-3">
                        <select class="select-role" name="role" required>
                            <option value="" disabled selected>Role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    
                    <div class="mb-3 input-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password" placeholder="Password" required id="password">
                        <div class="password-strength">
                            <div class="strength-meter" id="strength-meter"></div>
                        </div>
                    </div>
                    
                    <div class="mb-3 input-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i> Daftar
                        </button>
                    </div>
                    
                    <div class="divider">or</div>
                    
                    <div class="login-link">
                        <a href="{{ route('login') }}">Sign in here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bloodstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bloodstrap@1.0.0/dist/js/bloodstrap.bundle.min.js"></script>
    
    <script>
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthMeter = document.getElementById('strength-meter');
        
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            let strength = 0;
            
            // Check for length
            if (password.length > 7) strength += 1;
            
            // Check for uppercase letters
            if (password.match(/[A-Z]/)) strength += 1;
            
            // Check for numbers
            if (password.match(/[0-9]/)) strength += 1;
            
            // Check for special characters
            if (password.match(/[^A-Za-z0-9]/)) strength += 1;
            
            // Update strength meter
            const width = strength * 25;
            strengthMeter.style.width = width + '%';
            
            // Change color based on strength
            if (strength < 2) {
                strengthMeter.style.background = '#ff4757';
            } else if (strength < 4) {
                strengthMeter.style.background = '#ffa502';
            } else {
                strengthMeter.style.background = '#2ed573';
            }
        });
    </script>
</body>
</html>