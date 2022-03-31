@if ($message = Session::get('success'))
    <div class="alert alert-primary alert-block">
        
        <button type="button" class="btn-close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-info alert-block">
        
        <button type="button" class="btn-close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif