<h1>Customers</h1>

<a href="/customers/create">Add New Customer</a>

<ul>
    @forelse($customers as $customer)
        <li><a href="/customers/{{$customer->id}}">{{$customer->name}}</a> - {{$customer->email}}</li>
    @empty
        No Customer Found
    @endforelse
</ul>
