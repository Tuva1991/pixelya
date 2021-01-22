var date = ["世界","国旗","世界の建物"]
var link = ["world-matome.html","world-matome-folder/flag.html" , "world-matome-folder/world-building.html"]
var search_text = document.getElementById("search_text")
// date は カテゴリー   link はカテゴリーと同期した リンク  search_textは htmlで入力したテキストボックス
// x　は 回数のもの date と link を結びつけるのは この子の役目
// a は forEach で使われる date の 順番にしてるやつ   b は true or false で 検索されたかされてないかを確かめる
function function_search()
{
    let x = 0
    let b = false
    for(let i = 0; i<30; i++)
    {
    console.log("search1")
    date.forEach(a =>
        {
        var search1 = document.getElementById("search").value
        search_text.innerHTML = "検索中..."
        if(search1 == a)
        {
            if(link[x] != null)
            {
                open("file:///Users/iwamotosatoshi/workspace/webアプリコンテスト/htmlfolder/matomefolder/" + link[x]);
                x = 100
                b = true
            }
        }
        else
        {
            x += 1
        }
    })
    if(b == false)
    {
    search_text.innerHTML = "お探しのドット絵のジャンルは<br>見つかりませんでした。"
    }
    else
    {
        search_text.innerHTML = "検索結果が出ました。" 
    }
}
}
