<form action="" method="">
  @csrf

  <h2>Register for an Account</h2>

  <label for="email">Email:</label>
  <input 
    type="email"
    name="email"
    required
  >

  <label for="password">Password:</label>
  <input 
    type="password"
    name="password"
    required
  >

  <button type="submit" class="btn mt-4">Register</button>

  <!-- validation errors -->
   @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  
</form>