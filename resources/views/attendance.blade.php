<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
</head>

<body>
    <header>
        <div class="attendance_header_card">
            <div class="attendance_logo">Atte</div>
            <div class="menu">
                <ul>
                    <li><a href="#">ホーム</a></li>
                    <li><a href="#">日付一覧</a></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class=logout>ログアウト</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="attendance_card">
            <div class="attendance_name">{{ Auth::user()->name }}さんお疲れ様です！</div>
            <div class="attendance_content">
                <div class="work_start">
                    <a href="/attendance/start">勤務開始</a>
                </div>
                <div class="work_end">勤務終了</div>
                <div class="rest_start">休憩開始</div>
                <div class="rest_end">休憩終了</div>
            </div>
        </div>
    </main>

    <footer>
        <div class="attendance_inc">Atte,inc.</div>
    </footer>
</body>
</html>
