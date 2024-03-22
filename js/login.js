$(document).ready(function(){
    $("#loginForm").submit(function(event){
        event.preventDefault();
        
        let formData = $(this).serialize();
        $.ajax({
            url: "login.php",
            type: "POST", 
            data: formData,
            success: function(data){
                console.log(data); 
                if (data.trim() === "LOGGED IN SUCCESSFULLY") {
                    alert("LOGGED IN SUCCESSFULLY");
                    window.location.href = "profile.html";
                } else {
                    alert(data); 
                }           
            },
        });
    });
});