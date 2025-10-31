   
     function showToast(message, type = 'success') {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            toast.innerText = message;

            toastContainer.appendChild(toast);

            // Show the toast
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);

            // Remove the toast after it fades out
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.remove();
                }, 500); 
            }, 3000); 
        }
        
   $(document).ready(function () {

        // contact form
        $("#contactForm").unbind("submit").bind("submit", function(event) {

            let form = new FormData(this);
            $.ajax({
                url: "assets/php/mailController.php",
                type: "POST",
                data: form,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    console.log("Success Response: ", response);
                    if(response.success) {
                        $("#contactForm")[0].reset();
                        console.log("Form Reset Successful");

                    } else {
                        $("#contactForm")[0].reset();
                    }
                },
                error: function(response) {
                    console.log("Error Response: ", response);
                }
            });

            return false;
        });
        // contact form end

        // service form
        $("#serviceForm").unbind("submit").bind("submit", function(event) {

            let form = new FormData(this);
            $.ajax({
                url: "assets/php/mailController.php",
                type: "POST",
                data: form,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    console.log("Success Response: ", response);
                    if(response.success) {
                        $("#serviceForm")[0].reset();
                        console.log("Form Reset Successful");

                    } else {
                        $("#serviceForm")[0].reset();
                    }
                },
                error: function(response) {
                    console.log("Error Response: ", response);
                }
            });

            return false;
        });
        // service form end
});