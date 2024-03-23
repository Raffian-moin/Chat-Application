import "./bootstrap";

Echo.channel(`test-channel`).listen("TestEvent", (e) => {
    console.log(e);
});


document.addEventListener("DOMContentLoaded", function () {
    let documentationElement = document.querySelector("#documentation");
    console.log(documentationElement.textContent);
});
