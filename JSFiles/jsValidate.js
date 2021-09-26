function validate(){
    var headline = document.getElementById("headline").value;
    var content = document.getElementById("content").value;
    var journos = document.getElementById("journos").value;
    if (headline == null || headline == "") {
        alert("Please enter the headline.");
        return false;
    }
    else if (content == null || content == "") {
        alert("Please enter the content.");
        return false;
    }
    else if(journos==null||journos==""){
        alert("Please enter the journalist names");
        return false;
    }
    else{
        alert('Posting successful');
        return true;
    }
}