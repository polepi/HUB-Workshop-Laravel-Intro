@extends("layouts.navbar")

@section("content")
    <div class="container">
        <br>
        <h2>Our Menu</h2>
        {{-- PIZZAS SHOULD GO IN HERE --}}
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROHspWXnS9Xi0-ZRmPo0ClM0Wrv1fYWqq9eQ&s"
                 class="card-img-top" alt="Pepperoni Pizza">
            <div class="card-body">
                <h5 class="card-title">Pepperoni Pizza</h5>
                <p class="card-text">Tomato sauce, cheese, and pepperoni</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalOrderPizza">Order</a>
            </div>
        </div>
        {{-- END --}}

        {{-- ORDER MODAL --}}
        <div class="modal fade" id="modalOrderPizza" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Place order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Pizza</h5>
                        <select class="form-select">
                            <option>Pepperoni Pizza</option>
                        </select><br>
                        <h5>Size</h5>
                        <select class="form-select">
                            <option value="1">Individual</option>
                            <option value="2">Medium</option>
                            <option value="3">Familiar</option>
                        </select><br>
                        <h5>Ingredients</h5>
                        <ul class="list-group-flush">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_Tomato" id="TomatoCheckbox" checked>
                                <label class="form-check-label" for="TomatoCheckbox">Tomato Sauce</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_Cheese" id="CheeseCheckbox" checked>
                                <label class="form-check-label" for="CheeseCheckbox">Cheese</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_Pepperoni" id="PepperoniCheckbox" checked>
                                <label class="form-check-label" for="PepperoniCheckbox">Pepperoni</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_Pepperoni" id="MushroomsCheckbox" checked>
                                <label class="form-check-label" for="PepperoniCheckbox">Mushrooms</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_Bacon" id="BaconCheckbox" checked>
                                <label class="form-check-label" for="BaconCheckbox">Bacon</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" name="ing_York" id="YorkCheckbox" checked>
                                <label class="form-check-label" for="YorkCheckbox">York</label>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Order now</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- END --}}
    </div>

@endsection
