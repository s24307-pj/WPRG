$(document).ready(function (){
    $('#inputForm').submit(function (event){
        let inputLogin = $('#inputLogin').val();
        let inputPassword = $('#inputPassword').val();
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'lib/login.php',
            data:{
                'login': inputLogin,
                'password': inputPassword
            },
            success:function (response){
                let data = JSON.parse(response);
                if(data.success){
                    location.href = '/admin_categories.php';
                }
                else{
                    $('#alert').html(data.message).show().delay(5000).fadeOut(400);
                }
                console.log(response);
            }
        })
    })
})
$(document).ready(function(){
    $('#subNavbarNavButton').on('click', function (){
        $('#subNavbarNav').fadeToggle();
    })
});

$(document).ready(function(){
    $('#button_submit').on('click',function(){
        if($('#floatingPassword_first').val() !== $('#floatingPassword_second').val()){
            alert('Hasła różnią się od siebie!');
        }
    })
})

