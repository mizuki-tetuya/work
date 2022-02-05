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

.login_logo {
  font-size: 30px;
  margin: 30px 0px 20px 30px;
}
main {
  background-color: #EEEEEE;
  height: 80%;
}
.login_card {
  width: 40%;
  margin: auto;
  height: auto;
  text-align: center;
}
.login_title {
  font-size: 24px;
  font-weight: bold;
  padding: 60px 0px 40px 0px;
}

.login_password {
  margin: 20px 0px 20px 0px;
}
input {
  background-color: #EEEEEE;
  padding: 10px;
  width: 50%;
  border-radius: 5px;
}


button {
  width: 54%;
  margin: auto;
  background-color: #005FFF;
  color: white;
  padding: 10px;
  border-radius: 5px;
}

.login_content {
  width: 50%;
  margin: auto;
  margin-top: 30px;
  line-height: 1.5;
}
.login_content1 {
  color: #999999;
}
a {
  text-decoration: none;
  font-weight: bold;
  color: #005FFF;
}

.login_inc {
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  margin: auto;
  margin-top: 20px
}
</style>

<body>
  <header>
    <h2 class="login_logo">Atte</h2>
  </header>
  <main>
    <div class="login_card">
      <div class="login_title">ログイン</div>
      <form action="/login" method="post">
        @csrf
        <div class="login_mail"><input type="text" placeholder="メールアドレス" name="email"></div>
        <div class="login_password"><input type="text" placeholder="パスワード" name="password"></div>
        <div class="login_btn"><button type="submit">ログイン</button></div>
        <div class="login_content">
        <div class="login_content1">アカウントをお持ちでない方はこちらから</div>
        <div class="login_content2"><a href="/register">会員登録</a></div>
      </form>
    </div>
  </main>
  <footer>
    <div class="login_inc">Atte,inc.</div>
  </footer>
</body>
</html>