@extends("layouts.navbar")

@section("content")
    <div class="container">
        <br>
        {{-- ORDER INFORAMTION GOES HERE --}}
        <br>
        <h3>Customer Information</h3>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">Customer</th>
                <td>John</td>
                <td>john.diver@seaf.com</td>
                <td>Points: 0</td>
            </tr>
            <tr>
                <th scope="row">Order Placed</th>
                <td>31/01/2025 14:46</td>
                <th>Latest Update</th>
                <td>31/01/2025 14:56</td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td><span class="badge text-bg-secondary">UNCLAIMED</span></td>
                <th>Actions</th>
                <td>
                    <button type="button" class="btn btn-light">Claim</button>
                    <button type="button" class="btn btn-light"><i class="bi bi-check-lg"></i> Complete</button>
                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Remove</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div><br>
            <h3>Order Information</h3><br>
            <table class="table">
                <tbody>
                <tr>
                    {{-- DISPLAY INGRIDIENTS HERE --}}
                    <th scope="row">🍕 Pizza</th>
                    <td>Pepperoni Pizza</td>
                    <th scope="row">📐 Size</th>
                    <td>Medium</td>
                </tr>
                <tr>
                    <th scope="row">🍅 Ingredients</th>
                    <td colspan="3">Tomato Sauce, Cheese, Pepperoni</td>
                </tr>
                </tbody>
            </table>
        </div>
        {{-- END --}}
    </div>

@endsection
