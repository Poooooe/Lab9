let total = 0;
let totalItems = 0;
let eraserCost = 3;
let bulletPenCost = 5;
let highLighterCost = 8;
let shippingCost = 0;


function reset() {
    document.querySelector("#eraser").innerHTML = 0;
    document.querySelector("#bulletPen").innerHTML = 0;
    document.querySelector("#highLighter").innerHTML = 0;
    document.querySelector("#shippingCost").value = "0";
    document.querySelector("#items").value = "0";
}

function validateForm() {

    let eraser = document.querySelector("#eraser").value;
    let bulletPen = document.querySelector("#bulletPen").value;
    let highLighter = document.querySelector("#highLighter").value;
    let username = document.querySelector("#username").value;
    let password = document.querySelector("#password").value;
    this.total();
    if ((eraser == "") || (bulletPen == "") || (highLighter == "")) {
        alert("Please, put a value for each field.");
        return false;
    }
    if ((eraser == "0") && (bulletPen == "0") && (highLighter == "0")) {
        alert("Select at least one item to buy.");
        return false;
    }
    if (this.total < 1 || this.totalItems < 1) {
        alert("Select at least one item to buy.");
        return false;
    }
    if (username == "" || password == "") {
        alert("Please enter a username and password.");
        return false;
    }

    console.log(this.total + "---------");
    this.total = 0;
    this.totalItems = 0;
    return true;
}

function total() {
    let eraser = parseInt(document.querySelector("#eraser").value);
    let bulletPen = parseInt(document.querySelector("#bulletPen").value);
    let highLighter = parseInt(document.querySelector("#highLighter").value);
    this.shipping();
    this.total = (eraser * this.eraserCost) + (bulletPen * this.bulletPenCost) + (highLighter * this.highLighterCost);
    this.totalItems = eraser + bulletPen + highLighter;
    this.totalPrice += this.delivery;
}

function shipping() {
    let shipping = document.getElementsByName("shippingCost");
    let price = 0;
    for (let i = 0; i < shipping.length; i++) {
        if (shipping[i].checked) {
            price = shipping[i].value;
        }
    }
    if (price == "free") {
        this.delivery = 0;
    } else if (price == "overNight") {
        this.delivery = 50;
    } else if (price == "threeDay") {
        this.delivery = 5;
    }
}

function cost() {
    this.total();
    this.shipping();
    document.querySelector("#totalItems").innerHTML = "$ " + this.totalItems;
    document.querySelector("#shippingCost").innerHTML = "$ " + this.delivery;
    document.querySelector("#total").innerHTML = "$ " + this.total;

    this.total = 0;
    this.totalItems = 0;
}