<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakunin-管理</title>
    <link rel="stylesheet" href="{{ asset('css/d.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
 <div class='title'><p class='title1'>管理システム</p></div>
<form class="form-search"   >
    <div class="box">
        <div class='box1'>
            <div class="box-name">
              <span class="name">お名前</span>
            </div>
            <div class="box-name1">
              <input class="input-box1" type="text">  
            </div>
            <div class="box-sex">
              <span class="sex">性別</span>
            </div>
            <div class="sex-text">
              <input class="input3"type="radio" name="sex"value="全て" id="label3"checked />
              <label class="label3"for="label3">全て</label>

              <input class="input1"type="radio" name="sex"value="男性" id="label1" />
              <label class="label1"for="label1">男性</label>

              <input class="input2"type="radio" name="sex"value="女性"id="label2" />
              <label class="label2"for="label2">女性</label>
            </div>
        </div>
     
        <div class='box2'>
            <div class="box-day">
              <span class="day">登録日</span>
            </div>
            <div class="box-day1">
              <input class="input-box2" type="text">  
            </div>
            <div class="bou">~</div>
            <div class="box-day2">
              <input class="input-box22" type="text">  
            </div>
        </div>


        <div class='box3'>
            <div class="box-mail">
              <span class="mail">メールアドレス</span>
            </div>
            <div class="box-mail1">
              <input class="input-box3" type="text">  
            </div>
        </div>


        <div class='box4'>
        <button class="box4-button">検索</button>
        </div>
        <div class='reset'>
            <button class="reset1" type="submit">リセット</button>
          <p class="line1"></p>
          <p class="line2"></p>
        </div>
    </div>
</form>
</body>
</html>