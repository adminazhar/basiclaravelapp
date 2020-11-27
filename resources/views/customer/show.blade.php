<h1>Customer Detail</h1>
<a href="/customers">Go Back</a><br>
Customer Name: {{$customer->name}}
<br>
Customer Email: {{$customer->email}}

<div>
    <a href="/customers/{{$customer->id}}/edit">Edit Customer</a>
</div>

<div>
    <form action="/customers/{{$customer->id}}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>
