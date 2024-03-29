<!--            成功提示框-->
@if(Session::has('success'))
<div class="alert  alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <strong>成功！</strong>{{Session::get('success')}}
    </button>
</div>
@endif

{{-- 失败提示框--}}
@if(Session::has('error'))
<div class="alert  alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <strong>失败！</strong> {{Session::get('error')}}
    </button>
</div>
@endif