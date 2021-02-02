<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ぴくせるや 閲覧数の多いおすすめ</title>
    <link rel="stylesheet" href="https://lit-fortress-24137.herokuapp.com/stylefolder/style.css">
</head>
<body>
    <div id="title" class="title">
        <a href="https://lit-fortress-24137.herokuapp.com"><image class="logo" src="https://lit-fortress-24137.herokuapp.com/image/pixelya-logo.png"></a>
        <image src="https://lit-fortress-24137.herokuapp.com/image/pixelya-header.png" class="header"></image>
        </div>
    <ul class="tab"> <!--tab処理-->
        <li><a>[おすすめ▼]</a>
            <ul>
                <li><a href="shinchakuosusume.html">新着おすすめ</a></li>
                <li><a href="sakushaosusume.html">作者からのおすすめ</a></li>
                <li><b>閲覧数の多いおすすめ</b></li>
                <li><a href="htmlfolder/sakuhintoukou.php">[投稿]</a></li>
            </ul>
        </li>
        <li><a href="riyoukiyaku.html">[利用規約]</a></li>
        <li><a href="sakushanokotoba.html">[作者の言葉]</a></li>
    </ul>
    <div class="sidebar">  <!--左にあるサイドバー-->
        <a class="sponsorlink">スポンサード リンク<br>※スポンサーがいるとは言っていない</a>
        <a href="https://lit-fortress-24137.herokuapp.com" class="sponsorimage">のーいめーじ</a>
        <div class="search">
            <text style="font-size: 24px;">検索</text>
            <p>
                <input type="text" id="search" style="font-family: 'pixel-b'; height: 32px;">
                <input type="button" value="検索" onclick="function_search();" style="font-family: 'pixel-b'; height: 40px;">
            </p>
            <text id="search_text"> </text>
            <div>
                <p>検索のルール</p>
                <p>この検索ツールは基本的に<br>
                まとめの最初の単語<br>
                で検索できます。</p>
                <p style="font-size: 24px;">
                例
                <p style=" font-size: 22px; text-align: right; width: 240px; right: 10px; position: relative;">「国旗のドット絵」X<br>国旗」○</p>
                </p>
            </div>
        </div>
        </div>
        <div class="tab-below-space">
        <div class="tab-below-space-cover"></div>
            <div style=" top: 400px; position: relative; z-index: 1000; color: white; font-size: 20px; left: 20px;">
                <h1 style="background-color: beige; width: 50%; text-align: center; color:#0e0e21;;">このページの説明</h1>
                <p style="text-align: left; width: 50% ;">
                    ここは利用者さんの投稿したドット絵を乗せています。<br>
                    はっきり言ってログイン機能とか作ってないので、<br>
                    spamとかされたらひとたまりもありません。<br>
                    管理者のヒューマンエラーでデータが失われる<br>
                    可能性があるため、自分のデータを手元に<br>
                    持っておくことを強く推奨します。
                </p>
                <div class="form">
                    <text class="form-title" style=""><br><br>ドット絵投稿機能<br></text>
                    <text class="form_subtitle">不適切なドット絵や作品名、投稿者名や、spam等は控えてください。<br><?php echo $error?><br></text>
                    <form action = "https://lit-fortress-24137.herokuapp.com/htmlfolder/sakuhintoukou.php" method="post">
                        <p class="form-description">ファイル選択</p>
                        <input type="file">
                        <p class="form-description">投稿者名</p>
                        <input type="text" class="form-text">
                        <p class="form-description">作品名</p>
                        <input type="text" class="form-text">
                        <p class="form-description">説明</p>
                        <input type="text" class="form-text">
                        <p class="form-description">パスワード</p>
                        <input type="text" class="form-text">
                        <input type="button" class="form_button">
                    </form>
                </div>
                <ul class="image-ul" style="position: relative; bottom: 400px;">
                </ul>
            </div>
    </div>
    <?php
    ?>
    <script src="https://lit-fortress-24137.herokuapp.com/javascriptfolder/search.js"></script>
</body>
</html>
