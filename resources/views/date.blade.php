<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/date.css') }}">
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
        <div class="date_card">
        <div class="date">{{ $today }}</div>
            <table>
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                @foreach ($attendances as $index => $attendance)
                    <tr>
                        <td>{{ $attendance->user->name }}</td>
                        <td>{{ $attendance->start_time }}</td>
                        <td>{{ $attendance->end_time }}</td>
                        <td>
                            @php
                                $s = $rest_time_list[$index];

                                $hours = floor($s / 3600);
                                $minutes = floor(($s / 60) % 60);
                                $seconds = $s % 60;

                                $hms = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
                                echo $hms;
                            @endphp
                        </td>
                        <td>
                            @php
                                $start_time = strtotime($attendance->start_time);
                                $end_time = strtotime($attendance->end_time);

                                $s = $end_time - $start_time - $rest_time_list[$index];

                                $hours = floor($s / 3600);
                                $minutes = floor(($s / 60) % 60);
                                $seconds = $s % 60;

                                $hms = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
                                echo $hms;
                            @endphp
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>

    <footer>
        <div class="attendance_inc">Atte,inc.</div>
    </footer>
</body>
</html>
