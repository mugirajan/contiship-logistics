$(document).ready(function () {

        //contact form start
        $("#contactForm").unbind("submit").bind("submit", function() {

            let name = $("#contact-name").val();
            let email = $("#contact-email").val();
            let phone = $("#contact-phone").val();
            let message = $("#contact-message").val();
            let subject = $("#contact-subject").val();
            let isvalid = true;

            $(".text-danger").remove(); // clear old errors

            if(name == "") {
                $("#contact-name").after('<p class="text-danger"> Name field is required</p>');
                $('#contact-name').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#contact-name").closest('.form-group').removeClass('has-error').addClass('has-success');
            }	

            // ✅ Email validation
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in)$/;

            if(email == "") {
                $("#contact-email").after('<p class="text-danger"> Email field is required</p>');
                $('#contact-email').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else if(!emailPattern.test(email)) {
                $("#contact-email").after('<p class="text-danger"> Enter a valid email address</p>');
                $('#contact-email').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#contact-email").closest('.form-group').removeClass('has-error').addClass('has-success');
            }

            if(phone == "") {
                $("#contact-phone").after('<p class="text-danger"> Phone field is required</p>');
                $('#contact-phone').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#contact-phone").closest('.form-group').removeClass('has-error').addClass('has-success');
            }	

              if(subject == "") {
                $("#contact-subject").after('<p class="text-danger"> subject field is required</p>');
                $('#contact-subject').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#contact-subject").closest('.form-group').removeClass('has-error').addClass('has-success');
            }	

            if(isvalid) {
                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    subject:subject,
                    type: "contactForm"
                }

                $.ajax({
                    url: "assets/php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            showToast('Form submitted successfully!', 'success');
                            $("#contactForm")[0].reset();
                        }
                        else {
                            console.log("Error in succ ", params.message);
                        }
                    },
                    error: function(params) {
                        showToast('Form submitted error!', 'error');
                        console.log("error")
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //contact form end

        //service form start
        $("#serviceForm").unbind("submit").bind("submit", function() {

            let name = $("#name").val();
            let email = $("#email").val();
            let phone = $("#tel").val();
            let message = $("#message").val();
            let isvalid = true;

            $(".text-danger").remove(); // clear old errors

            if(name == "") {
                $("#name").after('<p class="text-danger"> Name field is required</p>');
                $('#name').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#name").closest('.form-group').removeClass('has-error').addClass('has-success');
            }	

            // ✅ Email validation
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in)$/;

            if(email == "") {
                $("#email").after('<p class="text-danger"> Email field is required</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else if(!emailPattern.test(email)) {
                $("#email").after('<p class="text-danger"> Enter a valid email address</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#email").closest('.form-group').removeClass('has-error').addClass('has-success');
            }

            if(phone == "") {
                $("#tel").after('<p class="text-danger"> Phone field is required</p>');
                $('#tel').closest('.form-group').addClass('has-error');
                isvalid = false;
            } else {
                $("#tel").closest('.form-group').removeClass('has-error').addClass('has-success');
            }	

            if(isvalid) {
                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    type: "serviceForm"
                }

                $.ajax({
                    url: "assets/php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            showToast('Form submitted successfully!', 'success');
                            $("#serviceForm")[0].reset();
                        }
                        else {
                            console.log("Error in succ ", params.message);
                        }
                    },
                    error: function(params) {
                        showToast('Form submitted error!', 'error');
                        console.log("error")
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //service form end

    });