<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>マイページ - My page</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mypage.css') }}">

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js" defer></script>
    <script src="{{ asset('assets/js/datepicker.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

</head>

<body>
    <div class="l-container l-search l-viewjob l-mypage">

        <header class="l-header">

            <div class="l-header__content">

                <div class="l-header__logo">
                    <a href="./" class="m-logo">
                        <img src="{{ asset('assets/img/logo.svg') }}" width="179" alt="CHOKOWA" class="m-logo__img">
                        <span class="m-logo__text m-sp-hidden">ちょこっとワークで支援の輪</span>
                    </a>
                </div>

                <nav class="l-header__glnv sec-gnav">
                    <ul>
                        <li class="m-pc-hidden m-item01"><a href="#">あなたのランク：ブロンズ</a></li>
                        <li class="m-pc-hidden m-item02"><a href="#">教育プログラム</a></li>
                        <li class="m-sp-hidden m-item03"><a href="#">人材を見る</a></li>
                        <li class="m-item04"><a href="#">求人を見る</a></li>
                        <li class="m-pc-hidden m-item05"><a href="#">カレンダー</a></li>
                        <li class="m-item06 m-sp-hidden"><a href="#">求人を出す</a></li>
                        <li class="m-item07"><a href="#">お気に入り</a></li>
                        <li class="m-item08"><a href="#">メッセージ</a></li>
                        <li class="m-item09">
                            <a href="#" class="m-noticetext">通知<span class="m-notice m-pc-hidden">2</span></a>
                            <span class="m-notice m-sp-hidden">2</span>
                            <span class="m-arrbtn"></span>
                            <ul class="m-parent m-parent02">
                                <li class="m-pc-hidden"><a href="#">通知</a></li>
                                <li class="m-pc-hidden"><a href="#">確定</a></li>
                                <li class="m-pc-hidden"><a href="#">未確定</a></li>
                            </ul>
                        </li>
                        <li class="is-active m-item10">
                            <a href="#">マイページ</a>
                            <span class="m-arrbtn"></span>
                            <ul class="m-parent m-parent01 m-parent02">
                                <li class="m-pc-hidden m-itemparent01"><a href="#">プロフィール編集</a></li>
                                <li class="m-pc-hidden m-itemparent02"><a href="#">実績管理</a></li>
                                <li class="m-pc-hidden m-itemparent03"><a href="#">メールアドレス変更</a></li>
                                <li class="m-pc-hidden m-itemparent04"><a href="#">パスワード変更</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="m-logout">ログアウト</a>
                    <ul class="m-parent m-boxpolicy">
                        <li class="m-pc-hidden"><a href="#">利用規約</a></li>
                        <li class="m-pc-hidden"><a href="#">プライバシーポリシー</a></li>
                    </ul>
                </nav>

                <div class="sec-gnav__btn m-pc-hidden">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <p class="m-pc-hidden"><span class="m-notice m-notice01">2</span></p>
            </div>

        </header>

        <main class="l-main">
            <div class="l-content">

                <section class="sec-mypage">
                    <h1 class="m-title">
                        <span class="m-title_jp">マイページ</span>
                        <span class="m-title_en">My page</span>
                    </h1>

                    <div class="m-mypage__menu">

                        <ul>
                            <li class="is-active"><a href="#">プロフィール編集</a></li>
                            <li class="border-r0"><a href="#">実績管理</a></li>
                            <li><a href="#">メールアドレス変更</a></li>
                            <li><a href="#">パスワード変更</a></li>
                        </ul>

                    </div>
                    <div class="m-wrapper">

                        <div class="m-mypage__content">
                            <form action="#" method="post" class="m-mypage__form">

                                <h2 class="m-mypage__title icon-dotblue">プロフィール編集</h2>

                                <div class="m-blockprofile m-blockprofile01">
                                    <p class="m-mypage__notes">＜注意事項＞</p>
                                    <p class="m-mypage__text01">chokowaは派遣労働ではなく、有料職業紹介事業です。<br>
                                        勤務先医院と雇用関係にあることをご理解ください。<br>
                                        報酬は月末締め、翌20日までにchokowaが集金の上、<br class="m-pc-hidden">
                                        あなたに代行振り込みをします。<br>
                                        chokowaを介することなしに登録先の医院と<br class="m-pc-hidden">
                                        直接金銭の授受を行うことを禁じます。<br>
                                        発覚した場合は利用規約に基づき罰則金30万円を<br class="m-pc-hidden">
                                        支払うことになります。</p>
                                    <div class="form-group form-checkbox">
                                        <label for="agree">
                                            <input type="checkbox" id="agree" name="agree" class="m-agree"
                                                required>
                                            <span class="checkmark"></span>
                                            <a href="#"
                                                class="m-agreetext m-colorblue m-borderbottom">利用規約</a><span>に同意して登録をする</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="m-boxprofile-item01">
                                    <h2 class="m-mypage__title01">編集項目</h2>
                                    <div class="m-wrapper">
                                        <p class="m-mypage__text02">必須項目は、求人への応募時に必要となります。</p>

                                        <form action="{{ route('nurse.profile.saveinfo') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <div class="m-boxdropdow">プロフィール</div>
                                                <div class="m-blockprofile m-dropdow">

                                                    {{-- Profile --}}
                                                    @if ($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @endif
                                                    <div class="m-boxprofile-item02">
                                                        <h2 class="m-mypage__title02">プロフィール</h2>
                                                        <div class="m-wrapper">

                                                            <div class="form-group">
                                                                <label>ニックネーム<span class="m-required">必須</span></label>
                                                                <span>{{ $nurse->nickname }}</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>姓名<span class="m-required">必須</span></label>
                                                                <span>{{ $nurse->fullname }}</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>姓名（カナ）<span class="m-required">必須</span></label>
                                                                <span>{{ $nurse->fullname_kana }}</span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>生年月日<span class="m-required">必須</span></label>
                                                                <div class="m-boxdate">
                                                                    <input type="text" id="datepicker"
                                                                        name="dateofbirth"
                                                                        value={{ $nurse->date_of_birth ? $nurse->date_of_birth : null }}
                                                                        placeholder={{ $nurse->date_of_birth ? $nurse->date_of_birth : '選択してください' }}
                                                                        class="m-border0" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="phonenumber">電話番号<span
                                                                        class="m-required">必須</span></label>
                                                                <input type="number" id="phonenumber"
                                                                    name="phonenumber" class="m-seclect01"
                                                                    value={{ $nurse->phone ? $nurse->phone : null }}
                                                                    placeholder={{ $nurse->phone ? $nurse->phone : '入力してください' }}
                                                                    required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="postcode">郵便番号<span
                                                                        class="m-required">必須</span></label>
                                                                <div class="m-boxselect">
                                                                    <input type="number" id="postalcode"
                                                                        name="postalcode" class="m-seclect01"
                                                                        value={{ $nurse->zipcode ? $nurse->zipcode : null }}
                                                                        placeholder={{ $nurse->zipcode ? $nurse->zipcode : '入力してください' }}
                                                                        required>
                                                                    {{-- <select id="postcode" name="postcode"
																		class="m-seclect01" required>
																		<option value="" disabled>選択してください</option>
																		<option value="郵便番号">郵便番号</option>
																		<option value="郵便番号">郵便番号</option>
	
																	</select> --}}
                                                                </div>
                                                            </div>
                                                            {{-- {{$prefectures}} --}}
                                                            <div class="form-group">
                                                                <label for="prefectures">都道府県<span
                                                                        class="m-required">必須</span></label>
                                                                <div class="m-boxselect">
                                                                    <select id="prefectures" name="prefectures"
                                                                        class="m-seclect01" required>
                                                                        <option value="" selected disabled
                                                                            hidden>
                                                                            {{ $mst_prefecture_name ? $mst_prefecture_name : '選択してください' }}
                                                                        </option>
                                                                        @foreach ($prefectures as $prefecture)
                                                                            <option
                                                                                selected={{ $prefecture->name == $mst_prefecture_name ? true : false }}
                                                                                value={{ $prefecture->id }}>
                                                                                {{ $prefecture->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="municipalities">市区町村<span
                                                                        class="m-required">必須</span></label>
                                                                <input type="text" id="municipalities"
                                                                    name="municipalities"
                                                                    placeholder={{ $nurse->municipality ?? '入力してください' }}
                                                                    value={{ $nurse->municipality }} required>
                                                                {{-- $prefecture->municipality ? $prefecture->municipality :  --}}
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="afteraddress">番地以降<span
                                                                        class="m-required">必須</span></label>
                                                                <div class="m-boxselect">
                                                                    <select id="afteraddress" name="afteraddress"
                                                                        class="m-seclect01" required>
                                                                        <option value="" disabled>
                                                                            {{ $nurse->after_address ?? '選択してください' }}
                                                                        </option>
                                                                        <option value="番地以降">番地以降</option>
                                                                        <option value="番地以降">番地以降</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="station">最寄駅</label>
                                                                <div class="m-boxselect">
                                                                    <select id="station" name="station"
                                                                        class="m-seclect01">
                                                                        <option value="" disabled>
                                                                            {{ $nurse->nearest_station ?? '選択してください' }}
                                                                        </option>
                                                                        <option value="最寄駅">最寄駅</option>
                                                                        <option value="最寄駅">最寄駅</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-grouppicture">
                                                                <label>プロフィール写真<span
                                                                        class="m-required">必須</span></label>
                                                                <div class="m-profilepicture">
                                                                    {{--  Upload avatar --}}
                                                                    <form method="post"
                                                                        action="{{ route('nurse.profile.saveinfo') }}"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="avatar-upload">
                                                                            <div class="avatar-edit">
                                                                                <input type="file" id="imageUpload"
                                                                                    class="imageUpload" name="file"
                                                                                    accept=".png, .jpg, .jpeg">
                                                                                <label for="imageUpload"></label>
                                                                            </div>
                                                                            <div class="avatar-preview">
                                                                                <div class="imagePreview"></div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    {{-- <div class="avatar-upload">
                                                                        <div class="avatar-edit">
                                                                            <input type="file" id="imageUpload"
                                                                                class="imageUpload"
                                                                                accept=".png, .jpg, .jpeg">
                                                                            <label for="imageUpload"></label>
                                                                        </div>
                                                                        <div class="avatar-preview">
                                                                            <div class="imagePreview"></div>
                                                                        </div>
                                                                    </div> --}}

                                                                </div>
                                                                <div class="m-ruleupfile">
                                                                    <div class="m-ruleupfile__content">
                                                                        <p class="m-dot">首から上が写っていること</p>
                                                                        <p class="m-dot">正面を向いていること</p>
                                                                        <p class="m-dot">加工されていないご本人の写真であること</p>
                                                                        <p class="m-dot">インカメラでの撮影<br>
                                                                            <span class="txt-indent">を推奨しています。</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="m-boxprofile-item03">
                                                            <div class="m-wrapper">
                                                                <label for="selfintroduction"
                                                                    class="m-mypage__title03">自己紹介</label>
                                                                <div class="m-textprofile">
                                                                    <textarea class="m-textprofile__content" name="selfintroduction" id="selfintroduction">
                                                                        {{ $nurse->introduction ?? '' }}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="c-btnsubmit m-btn01 m-btnprofile"
                                                            type="submit">登録する</button>
                                                    </div>
                                                    {{-- Profile --}}

                                                    
                                                </div>
                                            </div>
                                            
                                        </form>

                                        {{-- Way of working --}}
                                        {{-- <form method="POST" action="{{ route('nurse.profile.savewayofworking') }}">
											@csrf
											<div class="form-group">
												<div class="m-boxdropdow">働き方</div>
												<div class="m-blockprofile m-dropdow m-boxprofile-item02">
													<h2 class="m-mypage__title01 m-mypage__title04">働き方<span
															class="m-required">必須</span></h2>
	
													<div class="m-wrapper">
	
														<div class="form-group">
															<label for="occupation">職種</label>
															<div class="m-boxselect">
																<select id="occupation" name="occupation"
																	class="m-seclect01" required>
																	<option value="" disabled>選択してください</option>
																	<option value="看護師">看護師</option>
																	<option value="介護士">介護士</option>
																	<option value="PT">PT</option>
																	<option value="OT">OT</option>
																	<option value="OT">ST</option>
																</select>
															</div>
														</div>
	
														<div class="form-group">
															<label for="expertise">専門性</label>
															<div class="m-boxselect">
																<select id="expertise" name="expertise"
																	class="m-seclect01" required>
																	<option value="" disabled>選択してください</option>
																	<option value="呼吸器">呼吸器</option>
																	<option value="循環器">循環器</option>
																	<option value="脳神経">脳神経</option>
																	<option value="腎·泌尿器(透析)">腎·泌尿器(透析)</option>
																	<option value="皮膚排泄">皮膚排泄</option>
																	<option value="精神">精神</option>
																	<option value="小児">小児</option>
																	<option value="救急">救急</option>
																	<option value="ターミナル">ターミナル</option>
																	<option value="感染症">感染症</option>
																	<option value="麻酔">麻酔</option>
																	<option value="在宅/地域/家族">在宅/地域/家族</option>
																	<option value="災害">災害</option>
																	<option value="難病">難病</option>
																	<option value="その他">その他</option>
																</select>
															</div>
														</div>
	
														<div class="form-group">
															<label for="businesscontent">業務内容</label>
															<div class="m-boxselect">
																<select id="businesscontent" name="businesscontent"
																	class="m-seclect01" required>
																	<option value="" disabled>選択してください</option>
																	<option value="同行コンサルテーション">同行コンサルテーション</option>
																	<option value="技術指導/教育">技術指導/教育</option>
																	<option value="在宅移行支援">在宅移行支援</option>
																	<option value="アセスメント訪問">アセスメント訪問</option>
																	<option value="ケースカンファレンス">ケースカンファレンス</option>
																	<option value="同行 入浴援助">同行 入浴援助</option>
																	<option value="同行 外出支援 : 買い物等">同行 外出支援 : 買い物等</option>
																	<option value="管理者業務アシスト">管理者業務アシスト</option>
																	<option value=" (※要相談)"> (※要相談)</option>
																	<option value="勤務表作成アシスト">勤務表作成アシスト</option>
																	<option value="社外コンサルテーション">社外コンサルテーション</option>
																	<option value="(オンライ等)">(オンライ等)</option>
																	<option value="移動支援 : 旅行やイベントなど">移動支援 : 旅行やイベントなど
																	</option>
																	<option value="イベント救護">イベント救護</option>
																	<option value="その他">その他</option>
																</select>
															</div>
														</div>
	
														<div class="form-group">
															<label for="wayofworking">働き方</label>
															<div class="m-boxselect">
																<select id="wayofworking" name="wayofworking"
																	class="m-seclect01" required>
																	<option value="" disabled>選択してください</option>
																	<option value="積極的に働きたい">積極的に働きたい</option>
																	<option value="案件による">案件による/教育</option>
																	<option value="今は仕事を探していない">今は仕事を探していない</option>
																</select>
															</div>
														</div>
	
														<div class="form-group">
															<label for="qualification">資格</label>
															<div class="m-boxselect">
																<select id="qualification" name="qualification"
																	class="m-seclect01" required>
																	<option value="" disabled>選択してください</option>
																	<option value="認定看護師">認定看護師</option>
																	<option value="ナースプラクティクショナー">ナースプラクティクショナー</option>
																	<option value="専門看護師">専門看護師</option>
																	<option value="介護福祉士">介護福祉士</option>
																</select>
															</div>
														</div>
	
														<div class="form-textarea">
															<label for="qualificationsother">上記以外の資格</label>
															<div class="m-textarea">
																<textarea id="qualificationsother" name="qualificationsother" placeholder="入力してください" required></textarea>
															</div>
														</div>
	
														<div class="form-group">
															<label for="standardtime">標準時給</label>
															<input type="text" id="standardtime" name="standardtime"
																placeholder="入力してください" required>
														</div>
	
														<div class="form-group">
															<label for="wage">休日時給</label>
															<input type="text" id="wage" name="wage"
																placeholder="入力してください" required>
														</div>
	
														<div class="form-group">
															<label for="wageforhome">訪問診療時の時給</label>
															<input type="text" id="wageforhome" name="wageforhome"
																placeholder="入力してください" required>
														</div>
	
														<button class="c-btnsubmit m-btn01 m-btnworking"
															type="submit">登録する</button>
	
													</div>
	
												</div>
	
											</div>
										</form> --}}
                                        {{-- Way of working --}}

                                        {{-- <div class="form-group">
                                            <div class="m-boxdropdow">職務履歴</div>
                                            <div class="m-blockprofile m-dropdow m-boxprofile-item02">
                                                <h2 class="m-mypage__title01 m-mypage__title04">職務履歴</h2>

                                                <div class="m-wrapper">

                                                    <div class="form-group">
                                                        <label for="oldschool">出身校</label>
                                                        <input type="text" id="oldschool" name="oldschool"
                                                            placeholder="入力してください">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="graduationdate">卒業年月</label>
                                                        <div class="m-boxdate">
                                                            <input type="text" id="datepicker" name="graduationdate"
                                                                placeholder="選択してください" class="m-border0" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-textarea form-textarea01">
                                                        <label for="others">その他（経歴や所属団体など）</label>
                                                        <textarea id="others" name="others" placeholder="入力してください"></textarea>
                                                    </div>

                                                </div>
                                                <button class="c-btnsubmit m-btn01 m-btnworking m-btnworking01"
                                                    type="button">登録する</button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="m-boxdropdow">振込口座</div>
                                            <div class="m-blockprofile m-dropdow m-boxprofile-item02">
                                                <h2 class="m-mypage__title01 m-mypage__title04">振込口座<span
                                                        class="m-required">必須</span></h2>

                                                <div class="form-group">
                                                    <label for="financial">金融機関名</label>
                                                    <div class="m-boxselect">
                                                        <select id="financial" name="financial" class="m-seclect01"
                                                            required>
                                                            <option value="" disabled>選択してください</option>
                                                            <option value="金融機関名">金融機関名</option>
                                                            <option value="金融機関名">金融機関名</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="branchname">支店名</label>
                                                    <div class="m-boxselect">
                                                        <select id="branchname" name="branchname" class="m-seclect01"
                                                            required>
                                                            <option value="" disabled>選択してください</option>
                                                            <option value="支店名">支店名</option>
                                                            <option value="支店名">支店名</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="deposittype">預金種別</label>
                                                    <div class="m-boxselect">
                                                        <select id="deposittype" name="deposittype"
                                                            class="m-seclect01" required>
                                                            <option value="" disabled>選択してください</option>
                                                            <option value="預金種別">預金種別</option>
                                                            <option value="預金種別">預金種別</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="accountnumber">口座番号</label>
                                                    <input type="number" id="accountnumber" name="accountnumber"
                                                        placeholder="入力してください" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="accountname">口座名義(カナ)</label>
                                                    <input type="text" id="accountname" name="accountname"
                                                        placeholder="入力してください" required>
                                                </div>

                                                <button class="c-btnsubmit m-btn01 m-btnworking m-btnworking02"
                                                    type="button">登録する</button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="m-boxdropdow">免許登録</div>
                                            <div class="m-blockprofile m-dropdow m-boxprofile-item02">
                                                <h2 class="m-mypage__title01 m-mypage__title04">免許登録<span
                                                        class="m-required">必須</span></h2>

                                                <div class="m-wrapper">

                                                    <div class="form-group form-grouppicture form-grouppicture01">
                                                        <div class="m-profilepicture m-boxprofile01">

                                                            <div class="avatar-upload">
                                                                <div class="avatar-edit">
                                                                    <input type="file" id="imageUpload01"
                                                                        class="imageUpload"
                                                                        accept=".png, .jpg, .jpeg">
                                                                    <label for="imageUpload01"></label>
                                                                </div>
                                                                <div class="avatar-preview">
                                                                    <div class="imagePreview"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="m-imgprofile">
                                                        <img src="{{ asset('assets/img/img_profile.jpg') }}"
                                                            alt="岡山 花子">
                                                    </div>
                                                    <button class="c-btnsubmit m-btn01 m-btnworking m-btnworking03"
                                                        type="button">登録する</button>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="m-boxdropdow">本人確認書類登録</div>
                                            <div class="m-blockprofile m-dropdow m-boxprofile-item02">
                                                <h2 class="m-mypage__title01 m-mypage__title04">本人確認書類登録<span
                                                        class="m-required">必須</span></h2>

                                                <div class="m-wrapper">

                                                    <div class="form-group form-grouppicture form-grouppicture01">
                                                        <div class="m-profilepicture m-boxprofile01">

                                                            <div class="avatar-upload">
                                                                <div class="avatar-edit">
                                                                    <input type="file" id="imageUpload02"
                                                                        class="imageUpload"
                                                                        accept=".png, .jpg, .jpeg">
                                                                    <label for="imageUpload02"></label>
                                                                </div>
                                                                <div class="avatar-preview">
                                                                    <div class="imagePreview"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="m-ruleupfile m-ruleupfile01">
                                                            <div class="m-ruleupfile__content">
                                                                <p class="m-textrule">下記のいずれかをご提出ください。</p>
                                                                <p class="m-textrule01">■1点で確認できるもの</p>
                                                                <div class="m-boxrulefile">
                                                                    <p class="m-dot">各種運転免許証</p>
                                                                    <p class="m-dot">パスポート</p>
                                                                    <p class="m-dot">在留カード</p>
                                                                    <p class="m-dot">外国人登録証明書</p>
                                                                    <p class="m-dot">住民基本台帳カード</p>
                                                                    <p class="m-dot">個人番号カード</p>
                                                                </div>
                                                                <p>■2点で確認できるもの</p>
                                                                <div class="m-boxrulefile">
                                                                    <p class="m-dot">各種健康保険証</p>
                                                                    <p class="m-dot">住民票</p>
                                                                    <p class="m-dot">年金手帳</p>
                                                                    <p class="m-dot">印鑑登録証明書</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <button class="c-btnsubmit m-btn01 m-btnworking04"
                                                        type="button">登録する</button>

                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </main>


        <footer class="l-footer">
            <div class="m-wrapper">
                <span class="m-footer__text">Copyright © CONE-Xi All Rights Reserved.</span>
                <div class="m-sp-hidden">
                    <ul class="m-footer__menu">
                        <li>
                            <a href="#">利用規約</a>
                        </li>
                        <li>
                            <a href="#">プライバシーポリシー</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
