function kirim_form(){
    $('#pesan_kirim').html('Loading ...');
    $('#pesan_kirim').slideDown('slow');    
    
	var nim  = $('#nim').val();
	var pass  = $('#pass').val();
   
    $.ajax({
        //Alamat url harap disesuaikan dengan lokasi script pada komputer anda
        url      : 'login.php',
        type     : 'POST',
        dataType : 'html',
        data     : '&nim='+nim+'&pass='+pass,
        success  : function(respons){
            $('#pesan_kirim').html('Login Berhasil');
        },
    })
}