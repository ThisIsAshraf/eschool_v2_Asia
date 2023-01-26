// Admin Login Function
function adminLogin() {
    var admin_LoginEmail = $("#admin_LoginEmail").val();
    var admin_LoginPassword = $("#admin_LoginPassword").val();

    $.ajax({
        url: './Admin/admin_login.php',
        method: 'POST',
        data: {
            admin_LoginEmail: admin_LoginEmail,
            admin_LoginPassword: admin_LoginPassword
        },
        success: function (data) {
            if (data == 0) {
                $("#AdminLoginStatusMessage").html("<small class='alert alert-danger'>Invalid Username or Password</small>");
                setTimeout(() => {
                    $("#AdminLoginStatusMessage").html(" ")
                }, 5000);
            } else if (data == 1) {
                $("#AdminLoginStatusMessage").html('<div class="spinner-border text-success" role="status"></div>');
                clearAdminForm();
                setTimeout(() => {
                    window.location.href = "./Admin/admin_dashboard.php";
                }, 1000);
            }
        }
    });

}


// Contact Form
// function contact_form_submit() {
//     var visitor_name = $("#visitor_name").val();
//     var visitor_email = $("#visitor_email").val();
//     var visitor_phone = $("#visitor_phone").val();
//     var visitor_subject = $("#visitor_subject").val();
//     var visitor_message = $("#visitor_message").val();

//     $.ajax({
//         url: './contact.php',
//         method: 'POST',
//         data: {
//             visitor_form: "visitor_form",
//             visitor_name: visitor_name,
//             visitor_email: visitor_email,
//             visitor_phone: visitor_phone,
//             visitor_subject: visitor_subject,
//             visitor_message: visitor_message,
//         },
//         success: function (data) {
//             if (data == "OK") {
//                 console.log(data);
//                 $('#successMessage').html("<span class='alert alert-success'>Congratulation !! Your Response has been Submitted!!</span>");
//                 setTimeout(() => {
//                     $('#successMessage').html(" ");
//                 }, 5000);
//                 clearContactFormData();
//             }else if (data == "Failed") {
//                 $('#successMessage').html("<span class='alert alert-danger'>Failed to Submit your response</span>");
//             }
//         }
//     });
// }


// Admin Form Clear Function

function clearAdminForm() {
    $("#adminLoginForm").trigger("reset");
}
function clearContactFormData(){
    $("#contact-form").trigger("reset");
}

