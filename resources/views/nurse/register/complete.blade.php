<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home - ホームページ</title>
    <meta name="viewport" content="width=device-width">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="https://example.com">

    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="l-container l-signup">
        <header class="l-header">
            <div class="l-header__content">
                <div class="l-header__logo">
                    <a href="./" class="m-logo">
                        <img src="./../assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                        <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
                    </a>
                </div>

            </div>

        </header>

        <main class="l-main">
            <div class="l-content">

                <div class="sec-signupcomplete">
                    <div class="m-wrapper">

                        <h1 class="m-title">新規登録</h1>
                        <p class="m-signuptext01">ご登録はまだ完了していません</p>
                        <div class="sec-signupconfirm__content">
                            <div class="m-boxcomplete">
                                <h2 class="m-titlecomplete">メールをご確認ください</h2>
                                <div class="m-boxcomplete__conent">
                                    <p class="m-textcomplete01">{{ $email }}</p>
                                    <p class="m-textcomplete02">
                                        このアドレス宛に仮登録メールを送信しました。<br>メール内に記載されているリンクをクリックして、<br>24時間以内に新規登録を進めてください。</p>
                                </div>
                            </div>
                            <div class="m-boxcomplete m-boxcomplete01">
                                <p class="m-textcomplete01">メールが届かない場合</p>
                                <span class="m-textcomplete02">
                                    ゴミ箱、迷惑フォルダ内をご確認ください。<br>メールアドレスに間違いがあった場合は、<br>
                                </span>
                                <form action="{{ route('nurse.verification.send') }}" method="POST" class="m-boxlink">
                                    @csrf
                                    <button type="submit">こちら</button>
                                </form>
                                <span>
                                    から再度ご入力ください。
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </main>

    </div>

</body>


</html>
