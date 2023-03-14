let Name = document.getElementById('name');
let fatherName = document.getElementById('fatherName');
let submitBtn = document.getElementById('submitBtn');
let phoneNumber = document.getElementById('phoneNumber');
let checkBox = document.getElementById("checkBox");

submitBtn.addEventListener("click", function(e){
// submitBtn.onclick = (e) => {
    // for Name
    if (Name.value.length < 3) {
        e.preventDefault();
        Name.style.borderColor = "red";
    }else{
        Name.style.borderColor = "lightgray";
    }

    // For Father Name
    if (fatherName.value.length < 3) {
        e.preventDefault();
        fatherName.style.borderColor = "red";
    }else{
        fatherName.style.borderColor = "lightgray";
    }

    // For Phone Number
    if (phoneNumber.value.length != 10) {
        e.preventDefault();
        phoneNumber.style.borderColor = "red";
        console.log("hello");
    }else{
        phoneNumber.style.borderColor = "lightgray";
    }
    if (checkBox.checked == false) {
        e.preventDefault();
    }
    

})

