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
        <div class="tab-below-space">
        <div class="tab-below-space-cover"></div>
            <div style="top: 400px; position: relative; z-index: 1000; color: white; font-size: 20px; left: 20px;">
                <h1 style="background-color: beige; width: 50%; text-align: center; color:#0e0e21;;">このページの説明</h1>
                <p style="text-align: center; width: 50% ;">
                    ここは閲覧数によるおすすめを乗っけています。<br>
                    はっきり言ってIPアドレスとかで直近の訪問者とか<br>
                    記録してないので、F5押せば閲覧数が増えるガバガバです。<br>
                    不定期の更新でリセットされます。
                </p>
            </div>
            <ul class="image-ul">
                <li style="display: inline-block;"><!--image No.001-->
                        <div class="imagebase">
                            <a class="imageanchor" href="flag/japan-flag.php">
                                <image id="image-01" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </a>
                        </div>
                    <text id="image-txt-01" class="image-text">日本関連の旗まとめ</text>
                </li>
                <li style="display: inline-block;"><!--image No.002-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-02" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-02" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.003-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-03" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-03" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.004-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-04" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-04" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.005-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-05" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-05" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.006-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-06" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-06" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.007-->
                   <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-07" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-07" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.008-->
                    <div class="imagebase">
                        <a class="imageanchor">
                            <image id="image-08" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" >
                            </image>
                    </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.009-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image id="image-09" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text id="image-txt-09" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.010-->
                   <div class="imagebase">
                            <a class="imageanchor">
                                <image id="image-10" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text id="image-txt-10" class="image-text">No image</text>
                </li>
        </ul>
        </div>
    </div>
    <?php
    $link = 'https://lit-fortress-24137.herokuapp.com/htmlfolder/matomefolder/world-matome-folder/flag/counter-japan-flag.txt';
    $fp = fopen($link, "r");
    $japan_flag = fgets($fp);
    $japan_flag = (int) $japan_flag;
    ?>
    <script>
        var japan_flag = <?php echo json_encode($japan_flag);?>;
            hoge = 0;
            max = Math.max(hoge,japan_flag);
            date = [japan_flag,hoge];
            image = ["https://lit-fortress-24137.herokuapp.com/image/japaneseflag.png"];
            txt = ["日本国旗"];
            datecount = date.length;
            x = 0
            image01 = document.getelementById("image-01");
            image02 = document.getelementById("image-02");
            image03 = document.getelementById("image-03");
            image04 = document.getelementById("image-04");
            image05 = document.getelementById("image-05");
            image06 = document.getelementById("image-06");
            image07 = document.getelementById("image-07");
            image08 = document.getelementById("image-08");
            image09 = document.getelementById("image-09");
            image10 = document.getelementById("image-10");
            imagetxt01 = document.getelementById("image-txt-01");
            imagetxt02 = document.getelementById("image-txt-02");
            imagetxt03 = document.getelementById("image-txt-03");
            imagetxt04 = document.getelementById("image-txt-04");
            imagetxt05 = document.getelementById("image-txt-05");
            imagetxt06 = document.getelementById("image-txt-06");
            imagetxt07 = document.getelementById("image-txt-07");
            imagetxt08 = document.getelementById("image-txt-08");
            imagetxt09 = document.getelementById("image-txt-09");
            imagetxt10 = document.getelementById("image-txt-10");
            for(let i = 0; i<datecount; i++)
            {
                date.forEach(a =>
                if(max = a)
                {
                    image01.src = image[x];
                    imagetxt01.innerHTML = txt[x];
                }
                else
                {
                    x += 1;
                }
                )
            }

        console.log(max);
    </script>
    <script src="https://lit-fortress-24137.herokuapp.com/javascriptfolder/search.js"></script>
</body>
</html>
