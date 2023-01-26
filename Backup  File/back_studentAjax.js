// Existing Email Verification
$(document).ready(function () {
    console.clear();
    $("#student_Email").on("Keypress blur", function () {
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var stuEmail = $("#student_Email").val();
        $.ajax({
            url: './Student/student_signup.php',
            method: 'POST',
            data: {
                checkEmail: "CheckEmail",
                student_Email: stuEmail
            },
            success: function (data) {
                // console.log(data);
                if (data != 0) {
                    $("#statusMessage2").html("<small style='color:red;'>Email is already exist</small>");
                    $("#student_SignUpBtn").attr("disabled", true);
                } else if (data == 0) {
                    $("#statusMessage2").html("<small style='color:green;'>New Email.There you Go !!</small>");
                    $("#student_SignUpBtn").attr("disabled", false);
                } else if (!emailRegex.test(student_Email)) {
                    $("#statusMessage2").html("<small style='color:red;'>Please Enter a valid Email !! e.g. example@mail.com</small>");
                    $("#student_SignUpBtn").attr("disabled", true);
                }
            }
        });
    });
});

// Capture Student Sign Up Data
function addStudent() {
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var student_Name = $("#student_Name").val();
    var student_Email = $("#student_Email").val();
    var student_Phone = $("#student_Phone").val();
    var student_Password = $("#student_Password").val();
    var student_RePassword = $("#student_RePassword").val();

    // Sign up form Validation
    if (student_Name.trim() == "") {
        $("#statusMessage1").html("<small style='color:red;'>Please Enter your Full Name</small>");
        $("#student_Name").focus();
        return false;
    } else if (student_Email.trim() == "") {
        $("#statusMessage2").html("<small style='color:red;'>Please Enter your Email</small>");
        $("#student_Name").focus();
        return false;
    } else if (student_Email.trim() != "" && !emailRegex.test(student_Email)) {
        $("#statusMessage2").html("<small style='color:red;'>Please Enter a valid Email !! e.g. example@mail.com</small>");
        $("#student_Name").focus();
        return false;
    } else if (student_Phone.trim() == "") {
        $("#statusMessage3").html("<small style='color:red;'>Please Enter your Phone</small>");
        $("#student_Name").focus();
        return false;
    } else if (student_Password.trim() == "" || student_RePassword.trim() == "") {
        $("#statusMessage4").html("<small style='color:red;'>Please Enter your Password</small>");
        $("#statusMessage5").html("<small style='color:red;'>Please Enter your Confirm Password</small>");
        $("#student_Name").focus();
        return false;
    } else if ($("#student_Password").val() != $("#student_RePassword").val()) {
        $('#successMessage').html("<span class='alert alert-danger'>Password doesn't match</span>");
    } else {
        // Ajax Request
        $.ajax({
            url: './Student/student_signup.php',
            method: 'POST',
            dataType: "json",
            data: {
                student_signup: "student_signup",
                student_Name: student_Name,
                student_Email: student_Email,
                student_Phone: student_Phone,
                student_Password: student_Password,
                student_RePassword: student_RePassword
            },
            success: function (data) {
                // console.log(data)
                if (data == "OK") {
                    $('#successMessage').html("<span class='alert alert-success'>Congratulation !! Registration Successful!!</span>");
                    setTimeout(() => {
                        $('#successMessage').html(" ");
                    }, 5000);
                    clearFormData();
                } else if (data == "Failed") {
                    $('#successMessage').html("<span class='alert alert-danger'>Failed to registr</span>");
                }
            }
        });
    }

}

// Clear Signup Form

function clearFormData() {
    $("#student_RegistrationForm").trigger("reset");
    $("#statusMessage1").html(" ");
    $("#statusMessage2").html(" ");
    $("#statusMessage3").html(" ");
    $("#statusMessage4").html(" ");
    $("#statusMessage5").html(" ");
}

// Student Login 
function StudentLoginCheck() {
    var student_LoginEmail = $("#student_LoginEmail").val();
    var student_LoginPassword = $("#student_LoginPassword").val();

    $.ajax({
        url: './Student/student_login.php',
        method: 'POST',
        data: {
            student_LoginEmail: student_LoginEmail,
            student_LoginPassword: student_LoginPassword,
        },
        success: function (data) {
            if (data == 0) {
                $("#LoginStatusMessage").html("<small class='alert alert-danger'>Invalid Username or Password</small>");
                setTimeout(() => {
                    $("#LoginStatusMessage").html(" ");
                }, 5000);
            } else if (data == 1) {
                $("#LoginStatusMessage").html('<div class="spinner-border text-success" role="status"></div>');
                clearLogin();
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
        }
    });

}

// Clear Login Form

function clearLogin() {
    $("#studentLoginForm").trigger("reset");
}