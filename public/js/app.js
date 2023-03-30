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
