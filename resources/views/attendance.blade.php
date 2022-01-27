<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
li {
  list-style: none;
  font-weight: bold;
}
a {
  text-decoration: none;
  color: black;
}
li:not(:last-child) {
  margin-right: 50px;
}

main {
  background-color: #EEEEEE;
  height: 80%;
}
.attendance_card {
  width: 80%;
  height: 60%;
  margin: auto;
  text-align:center;
}
.attendance_name {
  padding: 50px 0px 50px 0px;
  font-weight: bold;
  font-size: 24px;
}
.attendance_content {
  height: 100%;
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  place-items: center;
}
.work_start,
.work_end,
.rest_start,
.rest_end {
  width:100%;
  height: 100%;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
  font-size: 24px;
}

.attendance_inc {
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
          <li><a href="#">ホーム</a></li>
          <li><a href="#">日付一覧</a></li>
          <li><form action="/logout" method="post">
            @csrf
            <button type="submit">ログアウト</button>
          </form></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="attendance_card">
      <div class="attendance_name">{{Auth::user()->name}}さんお疲れ様です！</div>
      <div class="attendance_content">
        <div class="work_start">勤務開始</div>
        <div class="work_end">勤務終了</div>
        <div class="rest_start">休憩開始</div>
        <div class="rest_end">休憩終了</div>
      </div>
    </div>
  </main>
  <header>
    <div class="attendance_inc">Atte,inc.</div>
  </header>
</body>
</html>