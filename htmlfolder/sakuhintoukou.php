<?php
//PW 49B507D1CCFE8BE6 16進数の乱数
$fp = fopen("file.txt", "r");
$string = fgets($fp);//読み込み
$error = null;
if(isset($_POST['name']))
{
    $file = $_POST['file'];
    $name = $_POST['name'];
    $image_name = $_POST['image-name'];
    $description = $_POST['description'];
    $password = $_POST['password'];
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');//諸々取得と脆弱性の除去
    $image_name = htmlspecialchars($image_name, ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
    if($name == "")//このnameとかに何も入っていないかの確認 正規表現使いたかったけれど時間ねえぇえええ 来年がんばる
    {
       $error = "エラー：名前が入力されていません！<br>";
    }
    else
    {
        if($file == null && $image_name == "" && $description == "" && $password == "")
        {
           $error = $error."エラー：記入漏れがあります！<br>";
        }
        else
        {
            $image_id = uniqid().'png';//ファイル名をユニーク化
                if($password == "49B507D1CCFE8BE6")
                {
                    move_uploaded_file($_FILE['file']['tmp_name'], "images/test.png");
                    $br = "<br>";//特に深い意味はない　多分 " つけるのがめんどくさかったんだと思われる
                    $error = null;//おそらく深い意味はない　error 関連のバグが発生した時の試行錯誤策が今も残されている感じ
                    $link = 'file.txt';//リンク設定    
                    date_default_timezone_set('Asia/Tokyo');//ここから
                    $today = date("Y-m-d H:i:s");//ここまで投稿時間の設定
                    $string = '<li  style="display: inline-block;">'.'<div class="imagebase">'.'<p class="image-txt">'."日本時間".$today.$br."投稿者：".$name."</p>".'<image class="image" src="'.$image_id.'.png"></image>'."</div>"."</li>".$string;
                    //表示画像や名前、説明の作成 html のコードを強引にそのまま作っちゃっています。
                    fclose($fp);
                    $fp = null;
                    file_put_contents($link, $string);//上書きして完成
                    header('Location: https://lit-fortress-24137.herokuapp.com/htmlfolder/sakuhintoukou.php');//これは多重投稿防止用のヘッダー
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
            </ul>
        </li>
        <li><a href="riyoukiyaku.html">[利用規約]</a></li>
        <li><a href="sakushanokotoba.html">[作者の言葉]</a></li>
        <li><b>[投稿]</b></li>
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
                <div class="form" style="top: 0px; left: 0px;">
                    <text class="form-title" style="top: 0px; left: 0px;"><br><br>ドット絵投稿機能<br></text>
                    <text class="form_subtitle"  style="top: 0px; left: 0px;">不適切なドット絵や作品名、投稿者名や、spam等は控えてください。<br><?php echo $error?><br></text>
                    <form action = "https://lit-fortress-24137.herokuapp.com/htmlfolder/sakuhintoukou.php" method="post">
                        <p class="form-description"  style="top: 0px; left: 0px;"  style="top: 0px; left: 0px;">ファイル選択</p>
                        <input type="file" class="form-file" name="file"  style="top: 0px; left: 0px;" accept="image/png">
                        <p class="form-description"  style="top: 0px; left: 0px;"  style="top: 0px; left: 0px;">投稿者名（最大30文字）</p>
                        <input type="text" class="form-text" maxlength="30" name="name" style="top: 0px; left: 0px;">
                        <p class="form-description"  style="top: 0px; left: 0px;"  style="top: 0px; left: 0px;">作品名（最大30文字）</p>
                        <input type="text" class="form-text"　maxlength="30" name="image-name" style="top: 0px; left: 0px;">
                        <p class="form-description"  style="top: 0px; left: 0px;"  style="top: 0px; left: 0px;">説明（最大300文字)</p>
                        <textarea rows="10" type="text" class="form-text" maxlength="300" name="description"  style="height: 240px; top: 0px; left: 0px;"></textarea>
                        <p class="form-description"  style="top: 0px; left: 0px;">パスワード</p>
                        <input type="text" class="form-text" maxlength="30" name="password"  style="top: 0px; left: 0px;">
                        <input type="submit" class="form_button"　value="送信"  style="top: 0px; left: 0px;">
                    </form>
                </div>
                <ul class="image-ul" style="position: relative;">
                </ul>
            </div>
    </div>
    <?php
    ?>
    <script src="https://lit-fortress-24137.herokuapp.com/javascriptfolder/search.js"></script>
</body>
</html>
