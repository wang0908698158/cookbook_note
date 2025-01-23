<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>用戶登入</title>
    <!-- 如果有需要，可引入 CSS、Bootstrap 或 Tailwind 等 -->
    <style>
        /* 簡單示意的樣式 */
        body {
            background: #f5f5f5;
            font-family: sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 5rem auto;
            padding: 2rem;
            background: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            padding: 0.6rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background: #007bff;
            color: #fff;
        }

        .btn-link {
            background: none;
            color: #007bff;
            text-decoration: underline;
            cursor: pointer;
        }

        .btn-link:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>使用者登入</h1>

        {{-- 顯示驗證錯誤訊息（若有） --}}
        @if ($errors->any())
        <div style="color: red; margin-bottom: 1rem;">
            <ul style="list-style: none; padding-left: 0;">
                @foreach ($errors->all() as $error)
                <li>・{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Laravel 表單(範例) --}}
        <form action="{{ 123 }}" method="POST">
            <form action="{{ 123 }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">帳號 (Email)</label>
                    <input type="text" id="email" name="email" placeholder="請輸入 Email" required>
                </div>

                <div class="form-group">
                    <label for="password">密碼</label>
                    <input type="password" id="password" name="password" placeholder="請輸入密碼" required>
                </div>

                <div class="login-actions">
                    <button type="submit" class="btn btn-primary">登入</button>

                    <!-- 註冊與忘記密碼連結，可依專案路由做調整 -->
                    <div>
                        <a class="btn-link" href="{{ 123 }}">註冊</a>
                        |
                        <a class="btn-link" href="{{ 123 }}">忘記密碼</a>
                    </div>
                </div>
            </form>
    </div>

</body>

</html>