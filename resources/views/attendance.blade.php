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
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/attendance/list">日付一覧</a></li>
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
                    @if($is_atte_start_time)
                    <a href="/attendance/start">勤務開始</a>
                    @else
                    <p style="color: gray;">勤務開始</p>
                    @endif
                </div>
                <div class="work_end">
                    @if($is_atte_end_time)
                    <a href="/attendance/end">勤務終了</a>
                    @else
                    <p style="color: gray;">勤務終了</p>
                    @endif
                </div>
                <div class="rest_start">
                    @if($is_rest_start_time)
                    <a href="/break/start">休憩開始</a>
                    @else
                    <p style="color: gray;">休憩開始</p>
                    @endif
                </div>
                <div class="rest_end">
                    @if($is_rest_end_time)
                    <a href="/break/end">休憩終了</a>
                    @else
                    <p style="color: gray;">休憩終了</p>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="attendance_inc">Atte,inc.</div>
    </footer>
</body>
</html>
