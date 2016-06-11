@if($errors->any())
<div class="alert alert-block alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert"></button>
    <h4 class="alert-heading">Error!</h4>
    @foreach($errors->all() as $error)
        <h5> {{ $error }} </h5>
    @endforeach
</div>
@endif