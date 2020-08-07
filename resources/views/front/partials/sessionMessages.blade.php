@if (session()->has('success'))
<script>
    toastr.success("{{session('success')}}", '¡Solicitud enviada!')
</script>
@elseif(session()->has('info'))
<script>
    toastr.success("{{session('info')}}", 'Ten en cuenta')
</script>
@elseif(session()->has('error'))
<script>
    toastr.success("{{session('error')}}", '¡Ups! Algo salió mal')
</script>
@endif