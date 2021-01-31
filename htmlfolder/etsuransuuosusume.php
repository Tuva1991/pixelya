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
            <div style=" top: 160px; position: relative; z-index: 1000; color: white; font-size: 20px; left: 20px;">
                <h1 style="background-color: beige; width: 50%; text-align: center; color:#0e0e21;;">このページの説明</h1>
                <p style="text-align: center; width: 50% ;">
                    ここは閲覧数によるおすすめを乗っけています。<br>
                    はっきり言ってIPアドレスとかで直近の訪問者とか<br>
                    記録してないので、F5押せば閲覧数が増えるガバガバです。<br>
                    不定期の更新でリセットされます。
                </p>
                <ul class="image-ul" style="position: relative; bottom: 400px;">
                <li style="display: inline-block;"><!--image No.001-->
                        <div class="imagebase">
                            <a id="image-anchor-01" class="imageanchor" href="">
                                <image id="image-01" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </a>
                        </div>
                    <text id="image-txt-01" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.002-->
                    <div class="imagebase">
                        <a id="image-anchor-02" class="imageanchor" href="">
                            <image id="image-02" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-02" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.003-->
                   <div class="imagebase">
                        <a id="image-anchor-03" class="imageanchor" href="">
                            <image id="image-03" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-03" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.004-->
                   <div class="imagebase">
                        <a id="image-anchor-04" class="imageanchor" href="">
                            <image id="image-04" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-04" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.005-->
                    <div class="imagebase">
                        <a id="image-anchor-05" class="imageanchor" href="">
                            <image id="image-05" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-05" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.006-->
                   <div class="imagebase">
                        <a id="image-anchor-06" class="imageanchor" href="">
                            <image id="image-06" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-06" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.007-->
                   <div class="imagebase">
                        <a id="image-anchor-07" class="imageanchor" href="">
                            <image id="image-07" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" style="height: auto;">
                            </image>
                        </a>
                    </div>
                    <text id="image-txt-07" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.008-->
                    <div class="imagebase">
                        <a id="image-anchor-08" class="imageanchor" href="">
                            <image id="image-08" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image" >
                            </image>
                    </a>
                    </div>
                    <text class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.009-->
                   <div class="imagebase">
                            <a id="image-anchor-09" class="imageanchor" href="">
                                <image id="image-09" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text id="image-txt-09" class="image-text">No image</text>
                </li>
                <li style="display: inline-block;"><!--image No.010-->
                   <div class="imagebase">
                            <a id="image-anchor-10" class="imageanchor" href="">
                                <image id="image-10" src="https://lit-fortress-24137.herokuapp.com/image/no-image.png" class="image">
                            </a>
                        </div>
                    <text id="image-txt-10" class="image-text">No image</text>
                </li>
        </ul>
        </div>
        </div>
    </div>
    <?php
    $link = 'https://lit-fortress-24137.herokuapp.com/htmlfolder/matomefolder/world-matome-folder/flag/counter-japan-flag.txt';
    $fp = fopen($link, "r");
    $japan_flag = fgets($fp);
    $japan_flag = (int) $japan_flag;
    ?>
    <script>
        var a = [{name: "japan_flag", value: <?php echo json_encode($japan_flag);?>, txt: "日本関連の旗", imagelink: "https://lit-fortress-24137.herokuapp.com/image/japaneseflag.png", link: "https://lit-fortress-24137.herokuapp.com/htmlfolder/matomefolder/world-matome-folder/flag/japan-flag.php"},
                 {name: "no-image", value: 0, txt: "No image" ,imagelink: "https://lit-fortress-24137.herokuapp.com/image/no-image.png", link: ""},
                ]//コレは全ての画像データを突っ込んでおくところ
        var image01 = document.getElementById("image-01");
            image02 = document.getElementById("image-02");
            image03 = document.getElementById("image-03");
            image04 = document.getElementById("image-04");
            image05 = document.getElementById("image-05");
            image06 = document.getElementById("image-06");
            image07 = document.getElementById("image-07");
            image08 = document.getElementById("image-08");
            image09 = document.getElementById("image-09");
            image10 = document.getElementById("image-10");
            imagetxt01 = document.getElementById("image-txt-01");
            imagetxt02 = document.getElementById("image-txt-02");
            imagetxt03 = document.getElementById("image-txt-03");
            imagetxt04 = document.getElementById("image-txt-04");
            imagetxt05 = document.getElementById("image-txt-05");
            imagetxt06 = document.getElementById("image-txt-06");
            imagetxt07 = document.getElementById("image-txt-07");
            imagetxt08 = document.getElementById("image-txt-08");
            imagetxt09 = document.getElementById("image-txt-09");
            imagetxt10 = document.getElementById("image-txt-10");//ここは画像リンク や テキストを変更するための変数置き場
            imageanchor01 = document.getElementById("image-anchor-01");
            imageanchor02 = document.getElementById("image-anchor-02");
            imageanchor03 = document.getElementById("image-anchor-03");
            imageanchor04 = document.getElementById("image-anchor-04");
            imageanchor05 = document.getElementById("image-anchor-05");
            imageanchor06 = document.getElementById("image-anchor-06");
            imageanchor07 = document.getElementById("image-anchor-07");
            imageanchor08 = document.getElementById("image-anchor-08");
            imageanchor09 = document.getElementById("image-anchor-09");
            imageanchor10 = document.getElementById("image-anchor-10");
            a.sort(function(a, b) {// ここは ソートして 並び替えをして、一番大きい順で作ってます。
                if (a.value > b.value)
                {
                    return -1;
                } 
                else 
                {
                    return 1;
                }
            });
            image01.src = a[0].imagelink; imagetxt01.innerHTML = a[0].txt; imageanchor01.href = a[0].link; //左から 画像変更  テキスト変更 アンカータグの リンク飛ぶやつの変更って感じです。
            image02.src = a[1].imagelink; imagetxt02.innerHTML = a[1].txt; imageanchor02.href = a[1].link;
            /*image03.src = a[2].imagelink; imagetxt03.innerHTML = a[2].txt; imageanchor03.href = a[2].link;
            image04.src = a[3].imagelink; imagetxt04.innerHTML = a[3].txt; imageanchor04.href = a[3].link;
            image05.src = a[4].imagelink; imagetxt05.innerHTML = a[4].txt; imageanchor05.href = a[4].link;
            image06.src = a[5].imagelink; imagetxt06.innerHTML = a[5].txt; imageanchor06.href = a[5].link;
            image07.src = a[6].imagelink; imagetxt07.innerHTML = a[6].txt; imageanchor07.href = a[6].link;
            image08.src = a[7].imagelink; imagetxt08.innerHTML = a[7].txt; imageanchor08.href = a[7].link;
            image09.src = a[8].imagelink; imagetxt09.innerHTML = a[8].txt; imageanchor09.href = a[8].link;
            image10.src = a[9].imagelink; imagetxt10.innerHTML = a[9].txt; imageanchor10.href = a[9].link;*/
    </script>
    <script src="https://lit-fortress-24137.herokuapp.com/javascriptfolder/search.js"></script>
</body>
</html>
