<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Taskura</title>
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
            padding: 20px; /* Reduced for mobile */
        }

        /* Top Logo Branding */
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

        /* Main Container */
        .page-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .signup-card {
            background: white;
            padding: 40px 30px; /* Adjusted padding */
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
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

        /* Form Styling */
        .form-group {
            margin-bottom: 16px;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px; /* 16px prevents iOS auto-zoom on focus */
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background-color: #fff;
        }

        input:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .signup-btn {
            width: 100%;
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 8px;
            transition: background-color 0.2s;
        }

        .signup-btn:hover {
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

        /* Grid for First/Last Name */
        .name-row {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Default: 2 columns */
            gap: 16px;
        }

        /* --- Responsive Breakpoints --- */

        /* Tablets and Phones */
        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .signup-card {
                padding: 30px 20px;
                box-shadow: none; /* Optional: cleaner look on mobile */
                border: none;
                background: transparent; /* Makes it feel more native on mobile */
            }

            .brand {
                justify-content: center; /* Center logo on small screens */
            }

            .name-row {
                grid-template-columns: 1fr; /* Stack names on mobile */
                gap: 0; 
            }

            h1 {
                font-size: 22px;
            }
        }

        /* Extra small devices */
        @media (max-width: 380px) {
            h1 {
                font-size: 20px;
            }
            
            .signup-btn {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <!-- Logo Section -->
    <header class="brand">
        <div class="logo-icon"></div>
        <span class="brand-name">Taskura</span>
    </header>

    <main class="page-content">
        <div class="signup-card">
            <p class="sub-heading">Start your journey</p>
            <h1>Sign Up to Taskura</h1>

            <form action="#">
                <div class="name-row">
                    <div class="form-group">
                        <input type="text" placeholder="First name" required aria-label="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last name" required aria-label="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Email adress" required aria-label="Email">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Password" required aria-label="Password">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Confirm pwd" required aria-label="Confirm Password">
                </div>

                <button type="submit" class="signup-btn">Sign up</button>
            </form>

            <p class="footer-text">
                Already have an account? <a href="#">Sign in</a>
            </p>
        </div>
    </main>

</body>
</html>
