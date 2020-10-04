<a href="{{route('admin.author.edit', $model)}}" class="btn btn-warning">Edit</a>
<button href="{{route('admin.author.destroy', $model)}}" class="btn btn-danger" id="delete">Delete</button>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();
        var href= $(this).attr('href');
        
        swal({
                title: "Apakah Anda yakin ingin menghapus data? ",
                text: "Data yang di hapus tidak bisa di kembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
        .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();
                    swal("Data berhasil di delete deleted!", {
                    icon: "success",
                });
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    })
</script>
