/* Creates the Dropdown Hamburger Menu for Mobile*/
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/*Clears the form*/
function clearDisp() {
    document.getElementById('name').value = null;
    document.getElementById('cardnum').value = null;
    document.getElementById('email').value = null;
    document.getElementById('month').value = "null";
    document.getElementById('year').value = "null";
    document.getElementById('country').value = "null";
    document.getElementById('ccv').value = null;
    clearList(document.getElementById('stprov'));
    document.getElementById('city').value = null;
}

/*Confirmation of preorder*/
function confirm() {
    clearDisp();
    alert("\n\nOrder Confirmed\n\n\nPlease Check Your Email For Confirmation");
}

/*Confirmation of mailing list*/
function mailConfirm() {
    var email = prompt("Please Enter Your Email Address", "");

    if (email == null) {
        return;
    }else {
        alert("\nThank You\n\nThe Email Address\n\n"+email+"\n\nhas been added to our mailing list.")
    }
}

/*Changes stprov dropdown based on country*/
function countrySelect(selectObject) {
    var country = selectObject;

    if (country == "ca") {
        clearList(document.getElementById('stprov'));
        canada();
    }
    if (country == "us") {
        clearList(document.getElementById('stprov'));
        usa();
    }
    if (country == "null") {
        clearList(document.getElementById('stprov'));
    }
}

/*Populates stprov with the states*/
function usa() {
    var select = document.getElementById("stprov");
    var states = ["State", "AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA", "MA", "MD", "ME", "MI","MN", "MO", "MS", "MT", "NC", "ND", "NE", "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "RI" ,"SC", "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY"];

    for (var i = 0; i < states.length; i++) {
        var st = states[i];

        var element = document.createElement("option");
        element.text = st;
        element.value = st;

        select.add(element);
    }
}

/*Populates stprov with provinces*/
function canada() {
    var select = document.getElementById("stprov");
    var prov = ["Province", "AB", "BC", "MB", "NB", "NL", "NS", "NT", "NU", "ON", "PE", "QC", "SK", "YT"];

    for (var i = 0; i < prov.length; i++) {
        var pr = prov[i];

        var element = document.createElement("option");
        element.text = pr;
        element.value = pr;

        select.add(element);
    }
}

/*Clears stprov*/
function clearList(object) {
    var i, L = object.options.length - 1;
    for (i = L; i >= 0; i--) {
        object.remove(i);
    }
}

/*Formats Credit Card Info*/
function formatCreditCardOnKey(event) {
    //on keyup, check for backspace to skip processing
    var code = (event.which) ? event.which : event.keyCode;
    if(code!=8) {
        formatCreditCard();
    } else {
        //trim whitespace from end; trimEnd() doesn't work in IE
        document.getElementById("cardnum").value = document.getElementById("cardnum").value.replace(/\s+$/, '');
    }
}

function formatCreditCard() {
    var cardField = document.getElementById("cardnum");
    //remove all non-numeric characters
    var realNumber = cardField.value.replace(/\D/g, '');
    var newNumber = "";
    for (var i = 1; i <= realNumber.length; i++) {
        //make sure input is a digit
        if (isNumeric(realNumber.charAt(i-1))) {
            newNumber += realNumber.charAt(i-1);
        }
        //add space every 4 numeric digits
        if (i % 4 == 0 && i > 0 && i < 15) {
            newNumber += "-";
        }
    }
    cardField.value = newNumber;
}

function isNumeric(char) {
    return('0123456789'.indexOf(char) !== -1);
}