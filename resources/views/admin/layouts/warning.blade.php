@if(session('warning'))
    <script>
        new PNotify({
        title: 'No se ha realizado la acción',
        text: '{{session('warning')}}',
        type: 'warning',
        styling: 'bootstrap3'
        });
    </script>
@endif