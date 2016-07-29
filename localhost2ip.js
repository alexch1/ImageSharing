function getmyIP(){
    // to be done!!!
    return "192.168.1.57";
}

localip = getmyIP();
// 替换id为baseurl的href.
window.onload= function(){
    var myreplace=document.getElementById('baseurl').href;
    document.getElementById('baseurl').href = myreplace.replace("localhost",localip);
} 