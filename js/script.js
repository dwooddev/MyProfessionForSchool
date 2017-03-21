/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function navHighlight(element) {
    element.style.backgroundColor = "#63AA9C";
}
function navUnhighlight(element) {
    element.style.backgroundColor = "#E9633B";
}
function validateAccountCreationForm() {
    var uUsername = document.getElementById("username").value;
    var uPassword = document.getElementById("password").value;
    var uConfirmPassword = document.getElementById("confirmpassword").value;
    var uFirstName = document.getElementById("firstname").value;
    var uLastName = document.getElementById("lastname").value;
    if(validateAccountLoginCreds( uUsername, uPassword, uConfirmPassword)){
        if(validateBioInfo(uFirstName, uLastName)){
            writeAccountSuccessMessage();
        } 
    }
    
}
function validateComment(){
    var comment = document.getElementById("commentfld").value;
    if(comment === null || comment.trim() === ''){
        writeFailMessage("Comment blank or Not Entered.", "comment field.")
    }
}
function writeFailMessage(failReason, badField) {
    
    alert("Could not validate " + badField
            + " because: " + failReason);
    
}
function writeAccountSuccessMessage() {
    alert("Good Job! Account Created. Please go to the Login Screen.");
}
function validateAccountLoginCreds( username, password, confirmPassword) {
    var retVal = false; 
    if (!validateNotNullEmptyOrWhitespace(username)) {
        writeFailMessage( "Username not entered.", "Username");
    } else if (!validateNotNullEmptyOrWhitespace(password)) {
        writeFailMessage( "Password not entered.", "Password");
    } else if (!validateNotNullEmptyOrWhitespace(confirmPassword)) {
        writeFailMessage( "Password confirmation not entered.", "Confirm Password");
    } else if (!validatePasswordsMatch(password, confirmPassword)) {
        writeFailMessage( "Supplied password fields do not match.", "Both Password Fields");
    } else{retVal = true;}
    return retVal;
}
function validateNotNullEmptyOrWhitespace(text) {
    var retVal = false;
    if (text.trim() !== "") {
        retVal = true;
    }
    return retVal;
}
function validateBioInfo( firstName, lastName) {
    var retVal = false;
    if (!validateNotNullEmptyOrWhitespace(firstName)){
        writeFailMessage( "First Name not entered.", "First Name");
    }else if(!validateNotNullEmptyOrWhitespace(lastName)) {
        writeFailMessage( "Last Name not entered.", "Last Name");
    } else { retVal = true;}
    return retVal;
}
function validatePasswordsMatch(password, confirmPassword) {
    var retVal = false;
    if (validateNotNullEmptyOrWhitespace(password)
            && validateNotNullEmptyOrWhitespace(confirmPassword)) {
        if (password === confirmPassword) {
            retVal = true;
        }
    }
    return retVal;

}

function submitComment(){
    var comment = document.getElementById("commentId").value;
    if(comment == null || comment == ""){
        alert("Please enter a comment")
        return false; 
    } 
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200){
            var text = request.responseText;
            var json = JSON.parse(text);
            var table = document.getElementById("commentsTbl");
            var newRow = table.insertRow(1);
            var newCell = newRow.insertCell(0);
            newCell.innerHTML = json.datetime;
            newCell = newRow.insertCell(1);
            newCell.innerHTML = json.comment;
        }
        request.open("POST", "ProcessCommentDateTime.php", true);
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send("comment=",comment);
        document.getElementById("commentId").value ="";
        
    }
}
