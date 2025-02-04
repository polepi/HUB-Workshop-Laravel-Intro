@extends("layouts.navbar")

@section("content")
    <div class="container">
        <br>
        <h2>All orders</h2>
        {{-- LIST OF ORDERS GO IN HERE --}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Ordered</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr onclick="window.location='/order/1';">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>31/01/2025 14:34</td>
                <td><span class="badge text-bg-primary">CLAIMED BY @COOK1</span></td>
            </tr>
            <tr onclick="window.location='/order/1';">
                <th scope="row">2</th>
                <td>John</td>
                <td>31/01/2025 14:52</td>
                <td><span class="badge text-bg-success">COMPLETE</span></td>
            </tr>
            <tr onclick="window.location='/order/1';">
                <th scope="row">3</th>
                <td>Adolf</td>
                <td>31/01/2025 16:59</td>
                <td><span class="badge text-bg-secondary">UNCLAIMED</span></td>
            </tr>
            </tbody>
        </table>
        {{-- END --}}
        <style>
            tr:hover {
                cursor: pointer;
            }
        </style>
    </div>

@endsection
