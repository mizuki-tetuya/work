<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header>
        <h2 class="login_logo">Atte</h2>
    </header>

    <main>
        <div class="login_card">
            <div class="login_title">ログイン</div>
            <form action="/login" method="post">
                @csrf
                <div class="login_mail">
                    <input type="email" placeholder="メールアドレス" name="email">
                </div>
                <div class="login_password">
                    <input type="password" placeholder="パスワード" name="password">
                </div>
                <div class="login_btn">
                    <button type="submit">ログイン</button>
                </div>
                <div class="login_content">
                    <div class="login_content1">アカウントをお持ちでない方はこちらから</div>
                    <div class="login_content2">
                        <a href="/register">会員登録</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="login_inc">Atte,inc.</div>
    </footer>
</body>
</html>
