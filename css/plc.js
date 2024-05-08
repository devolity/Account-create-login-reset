function checkemail()
{ var email=document.getElementById( "UserEmail" ).value;
 if(email) {
  $.ajax({
  type: 'post',
  url: 'checkmail.php',
  data: {
   user_email:email, },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK") {
    return true;  }
   else { return false; } } }); }
 else {
  $( '#email_status' ).html("");
  return false;  } }
////////////////////////////////////////////////
$("#phone").intlTelInput({
  utilsScript: "#" 
});
$("form").submit(function() {
  $("#hidden").val($("#phone").intlTelInput("getNumber"));
});
////////////////////////////////////////////////
    $(function () {
        $("#pass1").bind("keyup", function () {
            //TextBox left blank.
            if ($(this).val().length == 0) {
                $("#strength").html("");
                return; }
            //Regular Expressions.
            var regex = new Array();
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.
 
            var passed = 0;
            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
            //Validate for length of Password.
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
            //Display status.
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "*****";
                    color = "red";
                    break;
                case 2:
                    strength = "*****";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "*****";
                    color = "green";
                    break;
                case 5:
                    strength = "*****";
                    color = "darkgreen";
                    break;
            }
            $("#strength").html(strength);
            $("#strength").css("color", color);
        });
    });
/////////////////////////
function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var goodColor = "";
    var badColor = "#f9a8a8";
    if(pass1.value == pass2.value){
        pass1.style.backgroundColor = goodColor;
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = " "
    }else{
        pass1.style.backgroundColor = badColor;
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password don't match. Try again?"
    }
}
