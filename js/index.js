$('#login').on('submit',(v)=>{
    v.preventDefault();
    var f = new FormData();
    $('#login').serializeArray().forEach((key,input)=>{
        f.append(key['name'],key['value']);
    })
    $.ajax({
        method:'POST',
        url:'./process/login.php',
        processData: false,
        contentType: false,
        data:f,
        success:() => {
            Swal.fire({
                icon:'success',
                title:'Login',
                text:'Login bem sucedido!',
                showConfirmButton:false,
                timer:2000
            });
        },
        error:(erro) => {
            Swal.fire({
                icon:'error',
                title:'!Ops...',
                text:erro['statusText'],
                showConfirmButton:false,
                timer:4000
            });
        }
    });
});