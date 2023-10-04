function getFormattedDate(date) {
    return date.getFullYear()
        + "-"
        + ("0" + (date.getMonth() + 1)).slice(-2)
        + "-"
        + ("0" + date.getDate()).slice(-2);
}


  // Number Check

  function isDecimalNumber(evt, val) {
    try{
    var charCode = (evt.which) ? evt.which : event.keyCode;

    if(charCode==46){
        var txt=val;
        if(!(txt.indexOf(".") > -1)){

            return true;
        }
    }
    if (charCode > 31 && (charCode < 48 || charCode > 57) )
        return false;

    return true;
}catch(w){
    alert(w);
}
}
function isNumber(evt) {

    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

$("#main-form").submit(function () {
    $(".savebtn").attr("disabled", true);
    return true;
});