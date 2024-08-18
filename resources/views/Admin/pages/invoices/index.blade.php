@extends('Admin.layouts.app')
@section('title','Invoices')
@section('content')

    <body class="bg-light font-sans">

        <!-- Main Container -->
        <div class="container-fluid mt--7">
            <div class="row g-4">

                <!-- Left Column: Product Menu -->
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title h5">Product Menu</h2>

                            <!-- Category Tabs -->
                            <div class="mb-4">
                                <button class="btn btn-primary me-2" onclick="filterByCategory('all')">All</button>
                                <button class="btn btn-primary me-2" onclick="filterByCategory('food')">Food</button>
                                <button class="btn btn-primary me-2"
                                    onclick="filterByCategory('beverages')">Beverages</button>
                                <button class="btn btn-primary" onclick="filterByCategory('household')">Household</button>
                            </div>

                            <!-- Product List -->
                            <div id="product-list" class="row row-cols-1 g-4">
                                <!-- Dynamically inserted products will appear here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Middle Column: Search & Add Item -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title h5">Add Item by Barcode</h2>
                            <div class="mb-4">
                                <input type="text" id="barcode-input" class="form-control"
                                    placeholder="Enter barcode or search...">
                                <button onclick="addItemByBarcode()" class="btn btn-primary w-100 mt-3">Add Product by
                                    Barcode</button>
                            </div>

                            <!-- Transaction Details -->
                            <h2 class="card-title h5">Transaction Details</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="items-list">
                                        <!-- Dynamically Inserted Rows Here -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Total Section -->
                            <div class="d-flex justify-content-end align-items-center mt-4">
                                <div class="text-right">
                                    <h4>Total: $<span id="total-amount">0.00</span></h4>
                                </div>
                            </div>

                            <!-- Checkout Button -->
                            <div class="d-flex justify-content-end mt-4">
                                <button onclick="checkout()" class="btn btn-success">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @push('scripts')
            <!-- Include Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        @endpush

        <script>
            let items = [];
            let products = [{
                    id: 1,
                    name: "Apple",
                    price: 1.2,
                    category: "food",
                    barcode: "12345"
                },
                {
                    id: 2,
                    name: "Bread",
                    price: 2.5,
                    category: "food",
                    barcode: "12346"
                },
                {
                    id: 3,
                    name: "Cola",
                    price: 1.5,
                    category: "beverages",
                    barcode: "12347"
                },
                {
                    id: 4,
                    name: "Detergent",
                    price: 5.0,
                    category: "household",
                    barcode: "12348"
                },
                // Add more products here
            ];

            // Function to display products by category
            function filterByCategory(category) {
                const productList = document.getElementById('product-list');
                productList.innerHTML = '';

                products.forEach(product => {
                    if (category === 'all' || product.category === category) {
                        const productCard = `
        <div class="p-4 bg-gray-200 rounded-lg">
          <h3 class="text-lg font-semibold text-gray-800">${product.name}</h3>
          <p class="text-gray-600">$${product.price.toFixed(2)}</p>
          <button class="mt-2 bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 focus:outline-none" onclick="addItem(${product.id})">Add</button>
        </div>
      `;
                        productList.innerHTML += productCard;
                    }
                });
            }

            // Initialize with all products displayed
            filterByCategory('all');

            // Function to add item by selecting from product menu
            function addItem(productId) {
                const product = products.find(p => p.id === productId);
                const qty = 1;
                const total = qty * product.price;

                items.push({
                    name: product.name,
                    qty,
                    price: product.price,
                    total
                });
                updateTable();
                updateTotal();
            }

            // Function to add item by barcode
            function addItemByBarcode() {
                const barcode = document.getElementById('barcode-input').value;
                const product = products.find(p => p.barcode === barcode);

                if (product) {
                    addItem(product.id);
                    document.getElementById('barcode-input').value = '';
                } else {
                    alert('Product not found');
                }
            }

            // Function to update the item table
            function updateTable() {
                const itemsList = document.getElementById('items-list');
                itemsList.innerHTML = '';

                items.forEach((item, index) => {
                    const row = `
      <tr>
        <td class="p-3 border-b border-gray-200">${item.name}</td>
        <td class="p-3 border-b border-gray-200">${item.qty}</td>
        <td class="p-3 border-b border-gray-200">$${item.price.toFixed(2)}</td>
        <td class="p-3 border-b border-gray-200">$${item.total.toFixed(2)}</td>
        <td class="p-3 border-b border-gray-200">
          <button onclick="removeItem(${index})" class="text-red-500 hover:text-red-700">Remove</button>
        </td>
      </tr>
    `;
                    itemsList.innerHTML += row;
                });
            }

            // Function to update the total amount
            function updateTotal() {
                const totalAmount = items.reduce((acc, item) => acc + item.total, 0);
                document.getElementById('total-amount').textContent = totalAmount.toFixed(2);
            }

            // Function to remove an item
            function removeItem(index) {
                items.splice(index, 1);
                updateTable();
                updateTotal();
            }

            // Function to handle checkout
            function checkout() {
                if (items.length > 0) {
                    alert(`Total amount to pay: $${items.reduce((acc, item) => acc + item.total, 0).toFixed(2)}`);
                    items = [];
                    updateTable();
                    updateTotal();
                } else {
                    alert('No items to checkout.');
                }
            }
        </script>
    </body>
@endsection
