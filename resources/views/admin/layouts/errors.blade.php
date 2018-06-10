@if(sizeof($errors) > 0)
    <?php 
        $string = "";
        foreach ($errors->all() as $error) {
            $string .= $error.'\n';
        }
    ?>
    <script>
        new PNotify({
        title: 'Hubo un error',
        text: "{{$string}}",
        type: 'error',
        styling: 'bootstrap3'
        });
    </script>
@endif