<head>
    <title>Chokowa - パスワードをお忘れですか</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
</head>
<body>
    <div class="l-container l-nurselogin">
        <header class="l-header">
            <div class="l-header__content">
                <div class="l-header__logo">
                    <a href="./" class="m-logo">
                        <img src="{{ asset('assets/img/logo.svg') }}" width="179" alt="CHOKOWA" class="m-logo__img">
                        <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
                    </a>
                </div>
            </div>
        </header>
        <main class="l-main">
            <div class="l-content">
                <div class="m-wrapper">
                    <div class="sec-nurselogin">
                        <h1 class="m-title">
                            <span class="m-title_jp">パスワードをお忘れですか</span>
                        </h1>
                        <form action="{{ route('password.forgot') }}" method="POST" class="m-nurselogin__form">
                            @csrf
                            @if(session()->has('status'))
                                <span class="m-successpassword">{{ session('status') }}</span>
                            @endif
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="メールアドレス"
                                    class="m-email text-left @error('email') is-invalid @enderror"
                                    oninvalid="this.setCustomValidity('有効なメールアドレスを入力してください。')"
                                    oninput="this.setCustomValidity('')" required>
                            </div>
                            @if ($errors->any())
                                <ul class="m-error form-group">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <button class="c-btnsubmit mT20" type="submit">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
