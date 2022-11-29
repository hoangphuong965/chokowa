@extends('layouts.auth')

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
</head>
@section('content')
    <div class="l-container l-login">
        <header class="l-header">
            <a href="./" class="m-logo">
                <img src="/assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                <span class="m-logo__text">スキマ時間にちょこっとワーク</span>
            </a>
            <a href="#" class="m-loginnurses m-btnlogin">看護師の方はこちら</a>
        </header>
        <main class="l-main">
            <div class="m-wrapper">
                <div class="sec-login">
                    <h1 class="m-title">
                        <span class="m-title_jp">通知</span>
                        <span class="m-title_en">Notification</span>
                    </h1>

                    <p>パスワード変更成功！</p>
                    <p>もう一度ログインしてください！</p>
                </div>
                <br/>
                
            </div>
            <div>
                <a href="{{ route('admin.login.index') }}"><button class="c-btnsubmit" type="submit">Admin Login</button></a>
            </div>
            <br/>
            <a href="{{ route('station.login.index') }}"><button class="c-btnsubmit" type="submit">Station Login</button></a>
            <br/>
            <a href="{{ route('nurse.login.index') }}"><button class="c-btnsubmit" type="submit">Nurse Login</button></a>
        </main>

        <footer class="l-footer">
            <div class="m-wrapper">
                <span class="m-footer__text">Copyright © CONE-Xi All Rights Reserved.</span>
                <ul class="m-footer__menu">
                    <li>
                        <a href="#">利用規約</a>
                    </li>
                    <li>
                        <a href="#">プライバシーポリシー</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
@endsection