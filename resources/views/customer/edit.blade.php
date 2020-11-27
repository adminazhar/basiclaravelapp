<h1>Edit Customer Details</h1>

<form action="/customers/{{$customer->id}}" method="post">
    @method('PATCH')
    Name: <input type="text" name="name" value="{{$customer->name}}">
    <br>
    @error('name') {{ $message }} @enderror
    <br> <br>

    Email: <input type="email" name="email" value="{{$customer->email}}">
    <br>
    @error('email') {{ $message }} @enderror
    <br> <br>

    @csrf
    <button>Save Customer</button>
</form>
