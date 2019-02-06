$(function () {
    $("#btnSubmit").click(function () {
        var password = $("#txtPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    });
});
function myFunction(){
    var jos = $('#txtPassword').val();
    var confirmPassword = $("#txtConfirmPassword").val();
    if (jos != confirmPassword) {
        document.getElementById("btn_input").disabled = false;
    } else {
        document.getElementById("btn_input").disabled = true;
    }
}