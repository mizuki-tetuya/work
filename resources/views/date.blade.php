<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<style>
/*
html5doctor.com Reset Stylesheet
v1.6.1
Last Updated: 2010-09-17
Author: Richard Clark - http://richclarkdesign.com
Twitter: @rich_clark
*/

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}

body {
  width: 100%;
  height: 100vh;
}
.attendance_header_card {
  display: flex;
  justify-content: space-between;
  margin: 10px 50px 30px 50px;
}
.attendance_logo {
  font-size: 30px;
  font-weight: bold;
}
ul {
  display: flex;
}
.menu_content {
  list-style: none;
  font-weight: bold;
}
a {
  text-decoration: none;
  color: black;
}
.menu_content:not(:last-child) {
  margin-right: 50px;
}

main {
  background-color: #EEEEEE;
  height: 80%;
}


.date_card {
  width: 80%;
  height: 90%;
  margin: auto;
  text-align:center;
}
.date {

  font-size: 24px;
  padding: 50px 0px 50px 0px;
}
.date::before {
  content: "<";
  color: blue;
  background-color: white;
  padding: 5px;
  border: 1px solid blue;
  border-radius: 5px;
  display: inline-block;
  margin-right: 50px;
}
.date::after {
  content: ">";
  color: blue;
  background-color: white;
  padding: 5px;
  border: 1px solid blue;
  border-radius: 5px;
  display: inline-block;
  margin-left: 50px;
}
table {
  width: 90%;
  height: 70%;
  margin: auto;
  font-weight: 300;
}
tr {
  border-top: 1px solid #808080;
}

th, td {
  text-align: center;
  vertical-align: middle;
  font-weight: bolder;
}
th {
  font-weight: 900;
  font-family: 'Oswald', sans-serif;
}
.number {
  width: 60%;
  padding-top: 40px;
  margin: auto;
}

.number_row {
  width: 100%;
  list-style: none;
  border: 1px solid white;
  border-radius: 5px;
  padding: 10px;
  background-color: white;
  color: #3366FF;
  font-weight: bolder;
}
.number_row:not(:last-child) {
  margin-right: 1px;
}

.date_inc {
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  margin: auto;
  margin-top: 20px
}
</style>

<body>
  <header>
    <div class="attendance_header_card">
      <div class="attendance_logo">Atte</div>
      <div class="menu">
        <ul>
          <li class="menu_content"><a href="#">ホーム</a></li>
          <li class="menu_content"><a href="#">日付一覧</a></li>
          <li class="menu_content"><a href="#">ログアウト</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="date_card">
      <div class="date">2021-11-01</div>
      <table>
        <tr>
          <th>名前</th>
          <th>勤務開始</th>
          <th>勤務終了</th>
          <th>休憩時間</th>
          <th>勤務時間</th>
        </tr>
        <tr>
          <td>テスト太郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
        <tr>
          <td>テスト次郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:29:50</td>
        </tr>
        <tr>
          <td>テスト三郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:29:50</td>
        </tr>
        <tr>
          <td>テスト四郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:29:40</td>
        </tr>
        <tr>
          <td>テスト五郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:29:40</td>
        </tr>
      </table>
      <div class="number">
        <ul class="number_card">
        <li class="number_row"><</li>
        <li class="number_row">1</li>
        <li class="number_row">2</li>
        <li class="number_row">3</li>
        <li class="number_row">4</li>
        <li class="number_row">5</li>
        <li class="number_row">6</li>
        <li class="number_row">7</li>
        <li class="number_row">8</li>
        <li class="number_row">9</li>
        <li class="number_row">10</li>
        <li class="number_row">…</li>
        <li class="number_row">20</li>
        <li class="number_row">21</li>
        <li class="number_row">></li>
      </ul>
      </div>
    </div>
  </main>
  <header>
    <div class="date_inc">Atte,inc.</div>
  </header>
</body>
</html>