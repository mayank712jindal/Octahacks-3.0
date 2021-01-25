var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        // console.log("Hello");
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    // if (n == 1) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        //location dekhlena bhailog
        // location.assign("index.php");
        return false;
    }
    showTab(currentTab);
}

// This function deals with validation of the form fields
function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    // if (currentTab < x.length)
    y = x[currentTab].getElementsByTagName("input");
    // else
    //     y = x[x.length - 1].getElementsByTagName("input");
    z = document.getElementById("no");
    if (z.checked && currentTab == 2) {
        return true;
    }
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
}
function validateform() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab1");
    y = x[0].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[0].className += " finish";
        // location.assign("index.php");
    }
    return valid;
}
// check visited
function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}
function display() {
    var x = document.querySelectorAll('#disp');
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "";
    }

}
$(document).ready(function () {
    $("input[type='radio']").click(function () {
        if ($(this).val() == "y") {
            $("#disp").show();
        }
        else {
            $("#disp").hide();
        }
    });
});
function employee() {
    var x = document.getElementById("regForm");
    x.style.display = "none";
    var y = document.getElementById("regForm1");
    y.style.display = "block";
    var z = document.getElementById("btnSubmitEmployer");
    z.style.visibility = "visible";
    var w = document.getElementById("btnSubmitCandidate");
    w.style.visibility = "hidden";
}
function candidate() {
    var x = document.getElementById("regForm1");
    x.style.display = "none";
    var y = document.getElementById("regForm");
    y.style.display = "block";
    var z = document.getElementById("btnSubmitCandidate");
    z.style.visibility = "visible";
    var w = document.getElementById("btnSubmitEmployer");
    w.style.visibility = "hidden";
}
