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

function selectEvent() {
    var event = document.getElementById("event");
    var food = document.getElementById("food");
    var club = document.getElementById("club");
    var blog = document.getElementById("blog");
    var allOk = document.getElementById("all_ok");
    var content = document.getElementById("cont-calendar");
    var link = document.getElementById("link-calendar");

    if (event.checked || food.checked || club.checked || blog.checked) {
        content.className = "hidden";
        content.style.display = "none";

        link.className = "hidden";
        link.style.display = "none";

        allOk.style.display = "inherit";
        allOk.className = "visible";
    } else {
        allOk.style.display = "none";
        allOk.className = "hidden";

        content.className = "visible";
        content.style.display = "inherit";

        link.className = "visible";
        link.style.display = "block";
    }
}
