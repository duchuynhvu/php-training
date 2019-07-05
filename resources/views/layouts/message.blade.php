@if(session('success'))
    <p class="alert-info">{{session('success')}}</p>
@endif
@if(session('error'))
    <p class="alert-danger">{{session('error')}}</p>
@endif