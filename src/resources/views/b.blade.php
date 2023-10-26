<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakunin</title>
    <link rel="stylesheet" href="{{ asset('css/b.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-main">内容確認</div>
　　</header> 


<form class="form" action="/a" method="post">
    @csrf
　<div class="name-group">
          <div class="name-title">
            <span class="name1">お名前</span>
            <span class="kome">※</span>
          </div>
          <div class="name-content">
            <div class="name-text">
              <input class="name-text1" type="text" name="lname"value="{{ $data['lname'] }}"readonly/> 
              <input class="name-text2" type="text" name="fname"value="{{ $data['fname'] }}"readonly/>
            </div>
            <div class="name-rei">
              <p class="name-rei1"></p>
              <p class="name-rei1"></p></div>
            <div class="form-error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
　</div>
  <div class="sex-group">
          <div class="sex-title">
            <span class="name">性別</span>
            <span class="kome">※</span>
          </div>
          <div class="sex-content">
            <div class="sex-text">
              <input class="sex-text1" name="sex" id="label2"value="{{ $data['sex'] }}"for="label2" readonly/> 
            </div>
            <div class="form-error">
            <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
  </div>
  <div class="mail-group">
        <div class="mail-title">
          <span class="name">メールアドレス</span>
          <span class="kome">※</span>
        </div>
        <div class="mail-content">
          <div class="mail-text">
            <input class="mail-text1" type="email" name="email" value="{{ $data['email'] }}"readonly  />            
          </div>
          <p class="mail-rei"></p>
          <div class="form-error">
          <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
  </div>
  <div class="post-group">
    <div class="post-title">
      <span class="name">郵便番号</span>
      <span class="kome">※</span>
    </div>
    <div class="post-content">
      <div class="post-text"> 
        <input class="post-text1" type="tel" name="post" value="{{ $data['post'] }}"readonly/>
      </div>
      <p class="post-rei"></p>
      <div class="form-error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
  </div>
  <div class="address-group">
    <div class="address-title">
      <span class="name">住所</span>
      <span class="kome">※</span>
    </div>
    <div class="address-content">
      <div class="address-text">
        <input class="address-text1" type="text" name="address"value="{{ $data['post'] }}"readonly />
      </div>
      <p class="address-rei"></p>
      <div class="form-error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
  </div>
  <div class="building-group">
    <div class="building-title">
      <span class="name">建物名</span>
    </div>
    <div class="building-content">
      <div class="building-text">
        <input class="building-text1" type="text" name="building"value="{{ $data['building'] }}"readonly />
      </div>
      <p class="building-rei"></p>
      <div class="form-error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
  </div>
  <div class="opinion-group">
    <div class="opinion-title">
      <span class="name">ご意見</span>
      <span class="kome">※</span>
    </div>
    <div class="opinion-content">
      <div class="opinion-text">
        <textarea class="opinion-text1" name="opinion" readonly >{{ $data['opinion'] }}</textarea>
      </div>
      <div class="form-error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
  </div>
<div class="form-button">
   <button class="form-button-submit" type="submit">確認</button>
</div>
</form>
<form action="/"method="post">
  @csrf
  <div class="form-syusei">
    <button class="form-syusei1" type="submit">修正する</button>
    <p class="line1"></p>
    <p class="line2"></p>
</div>
</form>

</body>
</html>