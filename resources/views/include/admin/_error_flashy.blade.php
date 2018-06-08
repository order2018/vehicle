
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <?php flashy()->error($error, 'javascript:;');?>
    @endforeach
@endif