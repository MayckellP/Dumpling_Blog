var content = document.getElementById("back-calendar");
var link = document.getElementById("btn-month");
var allOk = document.getElementById("all_ok");

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

const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight =
                accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});

document.querySelector("#btn-month-mobile").onclick = () => {
    eventDate = document.getElementById("month");
    try {
        eventDate.showPicker();
    } catch (error) {
        window.alert(error);
    }
};
function getObjects(eventDate) {
    console.log(eventDate.value);
}

var dateInput = document.getElementById("monthPC");
var textDate = document.getElementById("text-date");

function changeDate() {
    var checkMonth = document.getElementById("checkMonth");
    var checkMonthPC = document.getElementById("checkMonthPC");

    if (checkMonth.checked) {
        checkMonth.value = 1;
    } else if (!checkMonth.checked) {
        checkMonth.value = 0;
    }

    if (checkMonthPC.checked) {
        checkMonthPC.value = 1;
        console.log("first");
    } else if (!checkMonthPC.checked) {
        checkMonthPC.value = 0;
        console.log("two");
    }
}

document.querySelector("#btn-month").onclick = () => {
    eventDate = document.getElementById("monthPC");
    try {
        eventDate.showPicker();
    } catch (error) {
        window.alert(error);
    }
};

function getObject(eventDate) {
    console.log(eventDate.value);
    textDate.innerHTML = dateInput.value;
}

function changeFormBlog() {
    var categoryBlog = document.getElementById("category-blog");
    var blogNone = document.getElementById("blogNone");
    var content = document.getElementById("content");
    var textBlog = document.getElementById("text-blog");

    if (categoryBlog.checked) {
        //dateInput.type = "month";
        console.log("first");
        blogNone.style.display = "none";
        textBlog.style.display = "inherit";
        content.style.height = "12rem";
    } else if (!categoryBlog.checked) {
        //dateInput.type = "date";
        console.log("two");
        blogNone.style.display = "inherit";
        textBlog.style.display = "none";
        content.style.height = "100%";
    }
}
