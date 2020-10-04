{{-- @if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
@endif
@if (session('info'))
<div class="alert alert-info" role="alert">
    {{session('info')}}
  </div>
@endif --}}




<script>
@if (session('success'))
    $.notify({
        // options
        message: '{{ session('success') }}'
    },{
        // settings
        type: 'success'
    });
@endif

@if (session('info'))
    $.notify({
        // options
        message: '{{ session('info') }}'
    },{
        // settings
        type: 'info'
    });
@endif

@if (session('danger'))
    $.notify({
        // options
        message: '{{ session('danger') }}'
    },{
        // settings
        type: 'danger'
    });
@endif
</script>
