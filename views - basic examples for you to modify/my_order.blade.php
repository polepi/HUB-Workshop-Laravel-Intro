@extends("layouts.navbar")

@section("content")
    <div class="container">
        <br>
        <h2>My orders</h2>
        {{-- YOUR ORDERS SHOW UP HERE --}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ordered</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pepperoni Pizza</td>
                <td>31/01/2025 14:34</td>
                <td><span class="badge text-bg-primary">CLAIMED BY @COOK1</span></td>
            </tr>
            </tbody>
        </table>
        <br>
    </div>

@endsection
