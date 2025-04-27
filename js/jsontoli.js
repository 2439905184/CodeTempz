// root参数是ol或者ul元素
function jsonToLi(json,root) 
{
    for(var key in json)
    {
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.innerText = key
        a.href = json[key]
        li.appendChild(a);
        root.appendChild(li);
    }    
}