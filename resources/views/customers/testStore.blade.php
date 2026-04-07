<form action="/customers" method="POST" enctype="multipart/form-data">
    @csrf

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<h2>Create Customer</h2>

<label>First Name:</label><br>
<input type="text" name="fname"><br><br>

<label>Last Name:</label><br>
<input type="text" name="lname"><br><br>

<label>Email:</label><br>
<input type="email" name="email"><br><br>

<label>Password:</label><br>
<input type="password" name="password"><br><br>

<label>Address:</label><br>
<input type="text" name="addressline"><br><br>

<label>Zip Code:</label><br>
<input type="text" name="zipcode"><br><br>

<label>Phone:</label><br>
<input type="text" name="phone"><br><br>

<label>Upload Image:</label><br>
<input type="file" name="uploads"><br><br>

<button type="submit">Create Customer</button>

</form>
