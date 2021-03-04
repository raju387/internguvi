$("#signupform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    $.ajax({
        url : "example.php",
        type : "POST",
        data : datatopost,
        success : function(data){
            if(data){
                $("#error").html(data);
            }
        }
       
    })
})



$("#loginform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    $.ajax({
        url : "edit.php",
        type : "POST",
        data : datatopost,
        success : function(data){
            if(data){
                $("#error").html(data);
            }
        }
       
    })
})