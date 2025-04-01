$(function(){

    $('.addDataButton').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');   
        $('.modal-footer button[type=submit]').html('Tambah Data Mahasiswa      ');
    });
    $('.showEditForm').on('click', function() {
        $('#formModalLabel').html('Edit Data Mahasiswa');   
        $('.modal-footer button[type=submit]').html('Edit Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/answerspace-mvc/public/mahasiswa/edit');

        const mahasiswa_id = $(this).data('id');
        $.ajax({
            url:'http://localhost/answerspace-mvc/public/mahasiswa/getEdit',
            data: { mahasiswa_id : mahasiswa_id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $("#name").val(data.name);
                $("#email").val(data.email);
                $("#nomatric").val(data.nomatric);
                $("#course").val(data.course);
                $("#mahasiswa_id").val(data.mahasiswa_id);
            }
        })
    });
});