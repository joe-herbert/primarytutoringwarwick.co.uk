document.addEventListener("DOMContentLoaded", () => {
    //toggle menu
    document.getElementById("hamburger").addEventListener("click", () => {
        document
            .getElementById("hamburger-toggle")
            .classList.toggle("active-menu");
        document.getElementById("nav").classList.toggle("shown");
    });

    //fun animations
    document.querySelectorAll("body .styledUl li").forEach((li) => {
        li.addEventListener("mouseenter", () => {
            if (document.querySelector("body").classList.contains("fun"))
                li.classList.add("flip");
        });
        li.addEventListener("animationend", () => {
            if (document.querySelector("body").classList.contains("fun"))
                li.classList.remove("flip");
        });
    });

    //duplicate all slides so carousel works without jumping
    document
        .querySelectorAll(".slide-track .slide.keySlide")
        .forEach((slide) => {
            let newSlide = slide.cloneNode(true);
            newSlide.classList.add("duplicateSlide");
            slide.parentElement.appendChild(newSlide);
        });
});

function onSubmit(token) {
    //on form submit, validate
    document.getElementById("contactFormSuccess").classList.add("hide");
    document.getElementById("contactFormError").classList.add("hide");
    let form = document.getElementById("contactForm");
    if (!form.name.value) {
        form.name.reportValidity();
        return false;
    }
    if (!form.email.value) {
        form.email.reportValidity();
        return false;
    }
    if (!form.message.value) {
        form.message.reportValidity();
        return false;
    }
    //valid so pepare to send message
    document.getElementById("btnSubmit").classList.add("hide");
    document.getElementById("formSpinner").classList.remove("hide");
    var str =
        "name=" +
        form.name.value +
        "&email=" +
        form.email.value +
        "&message=" +
        form.message.value;
    //send request to php file which will send the email
    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //handle response from php file
            document.getElementById("btnSubmit").classList.remove("hide");
            document.getElementById("formSpinner").classList.add("hide");
            if (this.responseText == "Success") {
                document
                    .getElementById("contactFormSuccess")
                    .classList.remove("hide");
            } else {
                document
                    .getElementById("contactFormError")
                    .classList.remove("hide");
                console.log(this.responseText);
            }
        }
    };
    xhttp.open("POST", "/submitForm.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(str);
}
