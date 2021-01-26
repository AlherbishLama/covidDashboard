
@if ($message = Session::get('success'))
   <div class="success-msg alert">
  <i class="fa fa-check"></i>
  <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="error-msg alert">
  <i class="fa fa-times-circle"></i>
  <strong>{{ $message }}</strong>
</div>    
@endif

