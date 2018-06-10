@if(session('success'))
    <script>
        new PNotify({
        title: 'Éxito',
        text: '{{session('success')}}',
        type: 'success',
        styling: 'bootstrap3'
        });
    </script>
@endif