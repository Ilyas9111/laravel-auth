<form action="" method="">
  @csrf

  <h2>Log In to Your Account</h2>

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

  <button type="submit" class="btn mt-4">Log in</button>

  <!-- validation errors -->
    @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
          @foreach ($errors->all() as $error)
              <li class="text-red-500">{{ $error }}</li>
          @endforeach
      </ul>
  
</form>