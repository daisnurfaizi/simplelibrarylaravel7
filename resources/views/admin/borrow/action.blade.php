<button href="{{route('admin.borrow.return',$model)}}" class="btn btn-primary" id="return">Pengembalian Buku</button>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('button#return').on('click', function(e){
        e.preventDefault();
        var href= $(this).attr('href');
        
        swal({
                title: "Data Buku Sudah Benar? ",
                text: "PArtikan data buku sama dengan yang dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
        .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('returnForm').action = href;
                    document.getElementById('returnForm').submit();
                    swal("Buku telah Dikembalikan!", {
                    icon: "success",
                });
                } else {
                    swal("tidak jadi!");
                }
            });
    })
</script>
