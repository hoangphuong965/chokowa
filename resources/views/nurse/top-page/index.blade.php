
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/top.css') }}">

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="l-container l-toppage">
      <header class="l-header">
        <a href="./" class="m-logo">
          <img src="{{ asset('assets/img/logo.svg')}}" width="179" alt="CHOKOWA" class="m-logo__img">
          <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
        </a>
        <a href="{{ route('nurse.login.index') }}" class="m-btnlogin m-btnlogintoppage">ログイン</a>
      </header>

      <main class="l-main">
        <div class="l-content">

          <div class="sec-blocktoppage">

            <div class="m-keyvisual">
              <h1 class="m-keyvisual__text">看護師用MV</h1>
            </div>

            <div class="sec-toppage">
              <div class="m-wrapper">

                <h2 class="m-notification">ちょこっとワークで<br class="m-pc-hidden">支援の輪</h2>

                <div class="sec-toppage__content">

                  <p class="sec-toppage__text01">スキマ時間を活用しながら、<br class="m-pc-hidden">利用者様の<br class="m-pc-hidden">「行きたい」「生きたい」を叶える<br class="m-pc-hidden">副業、就職活動にも使える<br class="m-pc-hidden">在宅医療介護業界に特化した<br class="m-pc-hidden">マッチングサービス「chokowa」</p>

                  <a href="{{ route('nurse.register.index') }}" class="m-btn01 m-btnstarted">今すぐ無料で始める</a>
                  <a href="{{ route('nurse.redirect-station') }}" class="m-btn01 m-btnbusinesses">事業所の方はこちら</a>

                </div>


              </div>
            </div>

          </div>
          <section class="sec-servicefeatures">
            <div class="m-wrapper">

              <h2 class="m-title">
                <span class="m-title_jp">サービスの特徴</span>
                <span class="m-title_en">Service</span>
              </h2>

              <p class="m-subtext01">スキマ時間を登録することで<br class="m-pc-hidden">事業所からオファーが届きます。<br class="m-pc-hidden">また、あなたから気になる事業所やイベントに<br>オファーを送ることも出来ます。</p>

              <div class="m-blocklist m-blocklist01">
                <ul>

                  <li>
                    <a href="#">
                      <p class="m-point">Point<span class="m-pointnumber"></span></p>
                      <h2 class="m-titleblocklis">社会貢献</h2>
                      <p class="m-textblocklist">在宅での生活に不安のある利用者様と、<br class="m-pc-hidden">その事業所を貴方の知識や技術で<br class="m-pc-hidden">在宅療養生活を支えます。</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <p class="m-point">Point<span class="m-pointnumber"></span></p>
                      <h2 class="m-titleblocklis">楽しみを共有</h2>
                      <p class="m-textblocklist">利用者様とイベントやツアーに<br class="m-pc-hidden">同行しながら、<br class="m-pc-hidden">趣味嗜好を楽しむことが出来ます。</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <p class="m-point">Point<span class="m-pointnumber"></span></p>
                      <h2 class="m-titleblocklis">副業しながら年収アップ</h2>
                      <p class="m-textblocklist">chokowaでは自分の時給を自由に<br class="m-pc-hidden">決めることができるので、<br class="m-pc-hidden">副業しながら年収アップに繋がります。</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <p class="m-point">Point<span class="m-pointnumber"></span></p>
                      <h2 class="m-titleblocklis">経験値アップ</h2>
                      <p class="m-textblocklist">在宅医療の知識を身につけることで、<br class="m-pc-hidden">病院勤務でもその知識を活用することが<br class="m-pc-hidden">できます。</p>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </section>


          <section class="sec-howtouse">

            <div class="m-wrapper">

              <h2 class="m-title">
                <span class="m-title_jp">使い方</span>
                <span class="m-title_en">How to use</span>
              </h2>

              <div class="m-blocklist m-blocklist02">

                <ul>

                  <li>
                    <div class="m-blocklist__img">アイコン</div>
                    <h2 class="m-titleblocklis">
                      <span class="m-titleblocklis__en">Step1</span>
                      <span class="m-titleblocklis__jp">登録</span>
                    </h2>
                    <p class="m-textblocklist">数か所の必須項目を登録するだけで、<br class="m-pc-hidden">募集の閲覧が可能です<br class="m-pc-hidden">所要時間　約3分</p>
                  </li>

                  <li>
                    <div class="m-blocklist__img">アイコン</div>
                    <h2 class="m-titleblocklis">
                      <span class="m-titleblocklis__en">Step2</span>
                      <span class="m-titleblocklis__jp">探す</span>
                    </h2>
                    <p class="m-textblocklist">募集情報から興味のある内容を<br class="m-pc-hidden">チェック</p>
                  </li>

                  <li>
                    <div class="m-blocklist__img">アイコン</div>
                    <h2 class="m-titleblocklis">
                      <span class="m-titleblocklis__en">Step3</span>
                      <span class="m-titleblocklis__jp">利用</span>
                    </h2>
                    <p class="m-textblocklist">実際にオファーを送って、<br class="m-pc-hidden">利用ができます。</p>
                  </li>

                  <li>
                    <div class="m-blocklist__img">アイコン</div>
                    <h2 class="m-titleblocklis">
                      <span class="m-titleblocklis__en">Step4</span>
                      <span class="m-titleblocklis__jp">報酬</span>
                    </h2>
                    <p class="m-textblocklist">利用後、報酬を受け取りましょう。</p>
                  </li>

                </ul>

              </div>

            </div>
          </section>

          <div class="m-notification01">

            <div class="m-wrapper">
              <h2 class="m-notification">スキマ時間に<br class="m-pc-hidden">ちょこっとワーク！</h2>
              <a href="{{ route('nurse.register.index') }}" class="m-btn01 m-btnstarted">今すぐ無料で始める</a>
            </div>

          </div>

        </div>
      </main>

      <footer class="l-footer">
        <div class="m-wrapper">
          <span class="m-footer__text">Copyright © CONE-Xi All Rights Reserved.</span>
        </div>
      </footer>
    </div>
    </body>
</html>
