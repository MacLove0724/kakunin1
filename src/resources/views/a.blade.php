<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakunin</title>
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body>
    <header class="header">
        <div class="header-main">お問い合わせ</div>
　　</header> 


<form class="h-adr" action="/a/b"method="post">
    @csrf
    <span class="p-country-name" style="display:none;">Japan</span>
　<div class="name-group">
          <div class="name-title">
            <span class="name1">お名前</span>
            <span class="kome">※</span>
          </div>
          <div class="name-content">
            <div class="name-text">
              <input class="name-text1" type="text" name="lname"value="{{ old('name') }}" />
              <input class="name-text2" type="text" name="fname"value="{{ old('name') }}" />
            </div>
            <div class="name-rei">
              <p class="name-rei1">例）山田</p>
              <p class="name-rei1">例）太郎</p></div>
            <div class="form-error">
              @error('name')
               {{ $message }}
                @enderror
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
              <input class="input-one"type="radio" name="sex"value="男性" id="label1"checked />
              <label class="label1"for="label1">男性</label>
              <input class="input-two"type="radio" name="sex"value="女性"id="label2" />
              <label class="label2"for="label2">女性</label>
            </div>
            <div class="form-error">
               @error('sex')
               {{ $message }}
                @enderror
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
            <input class="mail-text1" type="email" name="email" value="{{ old('email') }}"  />            
          </div>
          <p class="mail-rei">例）test@example.com</p>
          <div class="form-error">
          @error('email')
               {{ $message }}
                @enderror
          </div>
        </div>
  </div>
  <div class="post-group">
    <div class="post-title">
      <span class="name">郵便番号</span>
      <span class="kome">※</span>
    </div>
    <div class="mark">〒</div>
    <div class="post-content">
      <div class="post-text"> 
        <input class="p-postal-code" type="tel" name="post"value="{{ old('post') }}" />
      </div>
      <p class="post-rei">例）123-4567</p>
      <div class="form-error">
        @error('post')
        {{ $message }}
        @enderror
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
        <input class="p-region p-locality p-street-address p-extended-address" type="text" name="address" value="{{ old('address') }}"/>
      </div>
      <p class="address-rei">例）東京都渋谷区千駄々谷1-2-3</p>
      <div class="form-error">
        @error('address')
        {{ $message }}
        @enderror
      </div>
    </div>
  </div>
  <div class="building-group">
    <div class="building-title">
      <span class="name">建物名</span>
    </div>
    <div class="building-content">
      <div class="building-text">
        <input class="building-text1" type="text" name="building" value="{{ old('building') }}"/>
      </div>
      <p class="building-rei">例）千駄々谷マンション101</p>
      <div class="form-error">
        @error('building')
        {{ $message }}
        @enderror
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
        <textarea class="opinion-text1" name="opinion">{{ old('opinion') }}</textarea>
        
      </div>
      <div class="form-error">
        @error('opinion')
        {{ $message }}
        @enderror
      </div>
    </div>
  </div>
<div class="form-button">
   <button class="form-button-submit" type="submit">確認</button>
</div>
</form>
</body>
</html>