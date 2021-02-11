
@if(count($errors) > 0)
    <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach($errors->all() as $error)
                <li> <strong>{{ $error }}</strong></li>
            @endforeach
        </ul>

    </div>
@endif
