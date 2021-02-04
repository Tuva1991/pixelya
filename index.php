<?php
    $fp = fopen("comment.txt", "r");
    $string = fgets($fp);//コメント読み込み
    $error = null;
    if(isset($_POST['comment']))
    {
        if(isset($_POST['name']))//ここ && でも良かったかもしれない()
        {
            $comment = $_POST['comment'];
            $name = $_POST['name'];
            $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
            $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');//コメント 表示名の取得と脆弱性の除去
            if($name == "")
            {
                $error = "エラー：名前が入力されていません！<br>";
            }
            else
            {
                if($comment == "")
                {
                    $error = $error."エラー：文章が入力されていません！<br>";
                }
                else
                {
                    $error = null;//おそらく深い意味はない
                    $link = 'comment.txt';//リンク設定
                    $br = "<br>";//特に深い意味はない
                    date_default_timezone_set('Asia/Tokyo');//ここから
                    $today = date("Y-m-d H:i:s");//ここまで投稿時間の設定
                    $string = "日本時間".$today.$br."投稿者：".$name.$br.$comment.$br.$br.$string;//表示メッセージの作成
                    fclose($fp);
                    $fp = null;
                    file_put_contents($link, $string);//上書きして完成
                    header('Location: https://lit-fortress-24137.herokuapp.com');//これは多重投稿防止用のヘッダー
                }
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>色々なドット絵集 ぴくせるや</title>
    <link rel="stylesheet" href="stylefolder/style.css">
</head>
<body>
        <div id="title" class="title">
            <!--ピクセルやのロゴから 最初のページに飛べます。 ヘッダーは特に意味がありません。-->
            <a href="https://lit-fortress-24137.herokuapp.com"><image class="logo" src="https://lit-fortress-24137.herokuapp.com/image/pixelya-logo.png"></a>
            <image src="https://lit-fortress-24137.herokuapp.com/image/pixelya-header.png" class="header"></image>
        </div>
        <ul class="tab"> <!--tab処理-->
            <li><a>[おすすめ▼]</a>
                <ul>
                    <li><a href="htmlfolder/shinchakuosusume.html">新着おすすめ</a></li>
                    <li><a href="htmlfolder/sakushaosusume.html">作者からのおすすめ</a></li>
                    <li><a href="htmlfolder/etsuransuuosusume.php">閲覧数の多いおすすめ</a></li> 
                </ul>
            </li>
            <li><a href="htmlfolder/riyoukiyaku.html">[利用規約]</a></li>
            <li><a href="htmlfolder/sakushanokotoba.html">[作者の言葉]</a></li>
            <li><a href="htmlfolder/sakuhintoukou.php">[投稿]</a></li>
        </ul>
        <div class="sidebar">  <!--左にあるサイドバー-->
            <a class="sponsorlink">スポンサード リンク<br>※スポンサーがいるとは言っていない</a>
            <a class="sponsorimage">のーいめーじ</a>
            <div class="search"> <!--ドット絵のまとめ ページを探しているもの-->
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
        <!--OOのドット絵のまとめ-->
        <div class="tab-below-space"><!-- タブの下の空間(サイドバーを除く) -->
        <div class="tab-below-space-cover"></div>
            <ul style="z-index: 0;">  <!--コレは おそらくwebページ本体を見た方が早いと思うけれど、いろいろなところに飛べるやつです(アバウト)-->
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/world-matome.html" style="text-decoration: none;">
                        <image src="image/redtab.png" class="matome">
                            <p class="matome-text">
                                世界のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/season-matome.html" style="text-decoration: none;">
                        <image src="image/orangetab.png" class="matome">
                            <p class="matome-text">
                                季節のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/person-matome.html" style="text-decoration: none;">
                        <image src="image/yellowtab.png" class="matome">
                            <p class="matome-text">
                               人物のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/character-matome.html" style="text-decoration: none;">
                        <image src="image/limetab.png" class="matome">
                            <p class="matome-text">
                                キャラクターの
                            </p>
                            <p class="matome-text" style="top: 350px;">
                                ドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/building-matome.html" style="text-decoration: none;">
                        <image src="image/bluetab.png" class="matome">
                            <p class="matome-text">
                                建物のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/object-matome.html" style="text-decoration: none;">
                        <image src="image/browntab.png" class="matome">
                            <p class="matome-text">
                                物のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/plant-matome.html" style="text-decoration: none;">
                        <image src="image/greentab.png" class="matome">
                            <p class="matome-text">
                                植物のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/animal-matome.html" style="text-decoration: none;">
                        <image src="image/goldtab.png" class="matome">
                            <p class="matome-text">
                                動物のドット絵
                            </p>
                        </image>
                    </a>
                </li>
                <li style="display: inline-block;">
                    <a href="htmlfolder/matomefolder/phenomenon-matome.html" style="text-decoration: none;">
                        <image src="image/bluegreentab.png" class="matome">
                            <p class="matome-text">
                                自然現象のドット絵
                            </p>
                        </image>
                    </a>
                </li>
            </ul><!-- コメント機能 -->
            <div class="comment" style="top: 500px;">
                <text class="comment-title">コメント機能<br></text>
                <text class="comment-subtitle">不適切なコメント、spam等は控えてください。<br><?php echo $error?></text>
                <form action = "index.php" method="post"> 
                    <text class="name-description">名前（最大30文字）<br></text>
                    <input type="text" class="name-text" maxlength="30" name ="name">
                    <text class="comment-description"><br>コメント（最大50文字）<br></text>
                    <input type="text" class="comment-text" maxlength="50" name ="comment">
                    <input type="submit" class="comment-button" value= "送信">
                </form>
                <text class="comment-list"><br><?php echo $string?></text>
            </div>
        </div>
        </div>
    <script src="javascriptfolder/search.js"></script>
</body>
</html>
