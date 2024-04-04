$('.ubahData').on('click', function(){
    $('#judulModal').text('Edit Data Mahasiswa')
    $('.modal-footer button[type=submit]').text('Edit');
    $('.modal-body form').attr('action', 'http://localhost/php_project_2/public/mahasiswa/edit');
    
    const id = $(this).data('id');

    $.ajax({
        url: 'http://localhost/php_project_2/public/mahasiswa/getEdit',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $('#nama').val(data.nama);
            $('#npm').val(data.npm);
            $('#jurusan').val(data.jurusan);
            $('#umur').val(data.umur);
            $('#id').val(data.npm);
        }
    })
})


$('.tambahData').on('click', function(){
    $('#judulModal').text('Tambah Data Mahasiswa')
    $('.modal-footer button[type=submit]').text('Tambah');
})
