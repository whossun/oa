@if(Session::has('success'))
<div class="alert alert-block alert-success fade in">
    <button type="button" class="close" data-dismiss="alert"></button>
    <h4 class="alert-heading">Success!</h4>
    <h5>{{ Session::get('success') }}</h5>
</div>
@endif