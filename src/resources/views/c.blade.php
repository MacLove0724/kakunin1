<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakunin</title>
    <link rel="stylesheet" href="{{ asset('css/c.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
   
<form class="form" action="/" method="get">
    @csrf
    <div class="form-comment">
        <p class="form-comment1">ご意見いただきありがとうございました。</p>
    </div>
    <div class="form-button">
       <button class="form-button1">トップページへ</button>
    </div>
　
</form>
</body>
</html>