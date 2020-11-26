<h1>Customer Add</h1>

<form action="/customers" method="post">
    Name: <input type="text" name="name" value="{{old('name')}}">
    <br>
    @error('name') {{ $message }} @enderror
    <br> <br>

    Email: <input type="email" name="email" value="{{old('email')}}">
    <br>
    @error('email') {{ $message }} @enderror
    <br> <br>

    @csrf
    <button>Add Customer</button>
</form>
