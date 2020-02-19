@include('main')

<div class="bg">
  <div class="carousel">
      <div class="card active">
        <label id="label-card">Login</label>
        <div class="line-card active"></div>
      </div>
      <div class="card">
        <label id="label-card">Discover</label>
        <div class="line-card"></div>
      </div>
      <div class="card">
        <label id="label-card">Posting</label>
        <div class="line-card"></div>
      </div>
  </div>
</div>
<div class="bg-form">
  <div class="form">
    <div class="form-group">
      <label for="email" id="label-form">Email</label>
      <input type="text" class="form-control" id="input-form">
    </div>
    <div class="form-group">
      <label for="password" id="label-form">Password</label>
      <input type="password" class="form-control" id="input-form">
    </div>
    <label for="forget" id="forget">Forget Your Password ?</label>
    <div class="btn-start">
      <a href="/discover">
      <label for="start" id="start">Start</label>  
      </a>
    </div>
    <div class="btn-register">
      <label for="register" id="register">Rgister</label>  
    </div>
  </div>
</div>

  