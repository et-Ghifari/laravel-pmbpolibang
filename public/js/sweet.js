$(function(){
    $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Untuk Menghapus Data Ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus Data!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Terhapus!",
                text: "Data Anda Telas Terhapus.",
                icon: "success"
              });
            }
          });
    });
});
