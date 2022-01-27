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

.resister_logo {
  font-size: 30px;
  margin: 30px 0px 20px 30px;
}
main {
  background-color: #EEEEEE;
  height: 80%;
}
.resister_card {
  width: 40%;
  margin: auto;
  height: auto;
  text-align: center;
}
.resister_title {
  font-size: 24px;
  font-weight: bold;
  padding: 60px 0px 40px 0px;
}


input {
  background-color: #EEEEEE;
  padding: 10px;
  width: 50%;
  border-radius: 5px;
  margin-bottom: 35px;
}


button {
  width: 54%;
  margin: auto;
  background-color: #005FFF;
  color: white;
  padding: 10px;
  border-radius: 5px;
}

.resister_content {
  width: 50%;
  margin: auto;
  margin-top: 30px;
  line-height: 1.5;
}
.resister_content1 {
  color: #999999;
}
a {
  text-decoration: none;
  font-weight: bold;
  color: #005FFF;
}

.resister_inc {
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  margin: auto;
  margin-top: 20px
}
</style>
<body>
  <header>
    <h2 class="resister_logo">Atte</h2>
  </header>
  <main>
    <form action="{{ route('postResister') }}" method="post" class="resister_card">
      @csrf
      <div class="resister_title">会員登録</div>
      <div class="resister_name"><input type="text" placeholder="名前" name="name"></div>
      <div class="resister_mail"><input type="text" placeholder="メールアドレス" name="email"></div>
      <div class="resister_password"><input type="text" placeholder="パスワード" name="password"></div>
      <div class="resister_repassword"><input type="text" placeholder="確認用パスワード" name="password_confirmation"></div>
      <div class="resister_btn"><button type="submit">会員登録</button></div>
      <div class="resister_content">
        <div class="resister_content1">アカウントをお持ちの方はこちらからログイン</div>
        <div class="resister_content2"><a href="/login">ログイン</a></div>
      </div>
</form>
  </main>
  <footer>
    <div class="resister_inc">Atte,inc.</div>
  </footer>
</body>
</html>