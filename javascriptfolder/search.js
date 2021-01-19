var date = ["世界","国旗","世界の建物"]
var link = ["world-matome.html","world-matome-folder/flag.html" , "world-matome-folder/world-building.html"]
var x = 0
var search_text = document.getElementById("search_text")

function search()
{
    x = 0
    for(let i = 0; i<30; i++)
    {
    console.log("search1")
    date.forEach(a =>
        {
        var search1 = document.getElementById("search").value
        if(search1 == a)
        {
            open("https://lit-fortress-24137.herokuapp.com/htmlfolder/matomefolder/" + link[x]);
            x = 100
        }
        else
        {
            x += 1
        }
    })
    }
    search_text.innerHTML = "お探しのドット絵のジャンルは<br>見つかりませんでした。"
}
