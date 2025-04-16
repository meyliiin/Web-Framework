<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SafeNet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .login-box {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .logo span {
            color: #e74c3c;
        }
        
        h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }
        
        input {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 0.8rem;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 1rem;
        }
        
        button:hover {
            background-color: #c0392b;
        }
        
        .links {
            font-size: 0.9rem;
            color: #7f8c8d;
        }
        
        .links a {
            color: #3498db;
            text-decoration: none;
        }
        
        .warning {
            margin-top: 1.5rem;
            padding: 0.8rem;
            background-color: #fdedec;
            border-left: 4px solid #e74c3c;
            font-size: 0.8rem;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo">Safe<span>Net</span></div>
        <h2>Masuk ke Akun Anda</h2>
        
        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">LOGIN</button>
        </form>
        
        <div class="links">
            <a href="#">Lupa password?</a> | <a href="#">Daftar akun baru</a>
        </div>
        
        <div class="warning">
            <strong>PERHATIAN:</strong> Judi online dapat merusak kehidupan finansial dan sosial. SafeNet hadir untuk memberikan edukasi pencegahan judi online.
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Validasi sederhana
            if(username === '' || password === '') {
                alert('Username dan password harus diisi');
                return;
            }
            
            // Simulasi login
            if(username === 'safenet' && password === 'safenet123') {
                alert('Login berhasil! Mengarahkan ke halaman utama...');
                window.location.href = 'dashboard.html';
            } else {
                alert('Username atau password salah');
            }
        });
    </script>
</body>
</html>