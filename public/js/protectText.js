function decode(a)
{
    return a.replace(/[a-zA-Z]/g, function(c){
        return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
    })
}

function decodeEmail()
{
    document.getElementById("obfSpanId").innerHTML = "<a href=" + decode("yrnaqrezbyrtenns@tznvy.pbz") + ">" + "Email (ROT13)" + "</a>";
}

decodeEmail();