<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ぴくせるや 日本関連の旗のドット絵</title>
    <link rel="stylesheet" href="https://lit-fortress-24137.herokuapp.com/stylefolder/style.css">
</head>
<body>
    <div class="background">
        <div id="title" class="title">
            <a href="https://lit-fortress-24137.herokuapp.com"><image class="logo" src="https://lit-fortress-24137.herokuapp.com/image/pixelya-logo.png"></a>
                <image src="https://lit-fortress-24137.herokuapp.com/image/pixelya-header.png" class="header"></image>
            </div>
        <ul class="tab"> <!--tab処理-->
            <li><a>[おすすめ▼]</a>
                <ul>
                    <li><a href="https://lit-fortress-24137.herokuapp.com/htmlfolder/shinchakuosusume.html">新着おすすめ</a></li>
                    <li><a href="https://lit-fortress-24137.herokuapp.com/htmlfolder/sakushaosusume.html">作者からのおすすめ</a></li>
                    <li><a href="https://lit-fortress-24137.herokuapp.com/htmlfolder/etsuransuuosusume.html">閲覧数の多いおすすめ</a></li>
                </ul>
            </li>
            <li><a href="https://lit-fortress-24137.herokuapp.com/htmlfolder/riyoukiyaku.html">[利用規約]</a></li>
            <li><a href="https://lit-fortress-24137.herokuapp.com/htmlfolder/sakushanokotoba.html">[作者の言葉]</a></li>
        </ul>
        <div class="sidebar">  <!--左にあるサイドバー-->
            <a class="sponsorlink">スポンサード リンク<br>※スポンサーがいるとは言っていない</a>
            <a href="https://lit-fortress-24137.herokuapp.com" class="sponsorimage">のーいめーじ</a>
        </div>
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
        <div class="tab-below-space">
        <div class="tab-below-space-cover"></div>
            <ul class="image-ul">
                <li style="display: inline-block;"><!--image No.001-->
                        <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/japaneseflag.png" class="image" style="height: auto;">
                            </a>
                        </div>
                    <text class="image-text">日本国旗</text>
                </li>
                <li style="display: inline-block;"><!--image No.002-->
                        <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.003-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.004-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.005-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.006-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.007-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.008-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" >
                            </image>
                    </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.009-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.010-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.011-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.012-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.013-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.014-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.015-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.016-->
                        <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.017-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" >
                        </a>
                    </div>
                <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.018-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.019-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.020-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text class="image-text">No image</text>
                </li>
            </ul>
        </div>
    </div>
    <?php
$counter_file = 'count.txt';
$counter_lenght = 8;
$fp = fopen($counter_file, 'r+');
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        $counter = fgets($fp, $counter_lenght);
        $counter++;
        rewind($fp);
        if (fwrite($fp,  $counter) === FALSE) {
            echo ('<p>'.'ファイル書き込みに失敗しました'.'</p>');
        }
        flock ($fp, LOCK_UN);
    }
}
fclose ($fp);

echo '<p>';
echo ('あなたは <em>'.$counter.'</em> 人目の訪問者です。');
echo '</p>';
?>
    <script src="https://lit-fortress-24137.herokuapp.com/javascriptfolder/search.js"></script>
</body>
</html>