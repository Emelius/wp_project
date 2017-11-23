var adminBar = document.getElementById("wpadminbar");

if (adminBar) {
    var body = document.querySelectorAll("html")[0];
    body.style.cssText = "height: calc(100% - 32px)";
}
