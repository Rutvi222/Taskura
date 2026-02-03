<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Taskura</title>
    <style>
        :root {
            --primary-blue: #3b82f6;
            --bg-gray: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --border-color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-gray);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        /* Branding */
        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        .logo-icon {
            width: 24px;
            height: 24px;
            background-color: var(--primary-blue);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            display: inline-block;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 700;
            color: var(--text-dark);
        }

        /* Card Layout */
        .page-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .auth-card {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            border: 1px solid #f1f5f9;
        }

        .sub-heading {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 8px;
        }

        h1 {
            color: var(--text-dark);
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 32px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.2s;
            background-color: #fff;
        }

        input:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .forgot-link {
            display: block;
            text-align: right;
            font-size: 13px;
            color: var(--primary-blue);
            text-decoration: none;
            margin-top: 8px;
            font-weight: 500;
        }

        .login-btn {
            width: 100%;
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s;
        }

        .login-btn:hover {
            background-color: #2563eb;
        }

        .footer-text {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: var(--text-light);
        }

        .footer-text a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .auth-card {
                padding: 30px 20px;
                box-shadow: none;
                border: none;
                background: transparent;
            }
            .brand { justify-content: center; }
        }
    </style>
</head>
<body>

    <header class="brand">
        <div class="logo-icon"></div>
        <span class="brand-name">Taskura</span>
    </header>

    <main class="page-content">
        <div class="auth-card">
            <p class="sub-heading">Welcome back</p>
            <h1>Login to Taskura</h1>

            <form action="#">
                <div class="form-group">
                    <input type="email" placeholder="Email adress" required aria-label="Email">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Password" required aria-label="Password">
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <p class="footer-text">
                Don't have an account? <a href="#">Sign up</a>
            </p>
        </div>
    </main>

</body>
</html>
