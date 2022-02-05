<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header>
        <h2 class="register_logo">Atte</h2>
    </header>

    <main>
        <form action="/register" method="post" class="register_card">
            @csrf
            <div class="register_title">会員登録</div>
            <div class="register_name">
                <input type="text" placeholder="名前" name="name">
            </div>
            <div class="register_mail">
                <input type="email" placeholder="メールアドレス" name="email">
            </div>
            <div class="register_password">
                <input type="password" placeholder="パスワード" name="password">
            </div>
            <div class="register_repassword">
                <input type="password" placeholder="確認用パスワード" name="password_confirmation">
            </div>
            <div class="register_btn">
                <button type="submit">会員登録</button>
            </div>
            <div class="register_content">
                <div class="register_content1">アカウントをお持ちの方はこちらからログイン</div>
                <div class="register_content2">
                    <a href="/login">ログイン</a>
                </div>
            </div>
        </form>
    </main>

    <footer>
        <div class="register_inc">Atte,inc.</div>
    </footer>
</body>
</html>
