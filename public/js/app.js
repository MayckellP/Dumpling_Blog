const axios = require("axios");

const options = {
  method: 'POST',
  url: 'https://rapid-translate-multi-traduction.p.rapidapi.com/t',
  headers: {
    'content-type': 'application/json',
    'X-RapidAPI-Key': '038c4147dbmsh79947fb14f079edp11f9a2jsn3a12d55c49b5',
    'X-RapidAPI-Host': 'rapid-translate-multi-traduction.p.rapidapi.com'
  },
  data: '{"from":"en","to":"ar","e":"","q":["Hello","Whats","<h1>Test</h1>","Translate API","Rapid Translate Multi Traduction"]}'
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});


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
