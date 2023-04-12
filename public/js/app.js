function like() {
    var like = document.getElementById("checklike");
    var likeValue = document.getElementById("checkValue").value;
    var heart = document.getElementById("heart");

    if (like.checked) {
        like.value = likeValue;
        heart.style.color = "Red";
        console.log(like.value);
    }
}

function dislike() {}

var content = document.getElementById("cont-calendar");
var link = document.getElementById("link-calendar");
var allOk = document.getElementById("all_ok");

function animation() {
    content.className = "hidden";
    content.style.display = "none";

    link.className = "hidden";
    link.style.display = "none";

    allOk.style.display = "inherit";
    allOk.className = "visible";
}

function selectEvent() {
    var event = document.getElementById("event");
    var URLevent = document.getElementById("eventLink").href;
    var food = document.getElementById("food");
    var URLfood = document.getElementById("foodLink").href;
    var club = document.getElementById("club");
    var URLclub = document.getElementById("clubLink").href;
    var blog = document.getElementById("blog");
    var URLblog = document.getElementById("blogLink").href;

    if (event.checked) {
        animation();
        setTimeout(function () {
            window.location = URLevent;
        }, 1000);
    } else if (food.checked) {
        animation();
        setTimeout(function () {
            window.location = URLfood;
        }, 1000);
    } else if (club.checked) {
        animation();
        setTimeout(function () {
            window.location = URLclub;
        }, 1000);
    } else if (blog.checked) {
        animation();
        setTimeout(function () {
            window.location = URLblog;
        }, 1000);
    } else {
        allOk.style.display = "none";
        allOk.className = "hidden";

        content.className = "visible";
        content.style.display = "inherit";

        link.className = "visible";
        link.style.display = "block";
    }
}

function backPage() {
    setTimeout("history.back()", 500);
}
