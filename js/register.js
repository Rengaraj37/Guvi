$(document).ready(function(){
    $("#registerForm").submit(function(event){
        event.preventDefault();     
        let formData = $(this).serialize();
        $.ajax({
            url: "register.php",
            type: "POST", 
            data: formData,
            success: function(data){
                console.log(data); 
                if (data.trim() === "REGISTERED SUCCESSFULLY") {
                    alert("REGISTERED SUCCESSFULLY");
                    window.location.href = "login.html";
                } else {
                    alert(data); 
                }
            },
        });
        $(this).trigger("reset"); 
    });
});

