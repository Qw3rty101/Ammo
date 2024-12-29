<!-- resources/views/menu.blade.php -->
<x-layout>
    <div class="container mt-4">
        <div class="d-flex align-items-center mb-4 mt-4">
            <a href="/" class="btn btn-dark me-2">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <button id="showDrinks" class="badge text-dark cus-badge p-3 me-2">Minuman</button>
            <button id="showFoods" class="badge text-dark cus-badge p-3">Makanan</button>
        </div>



        <!-- Menampilkan Menu Drink -->
        <div class="row mt-4" id="drinksSection">
            <h2 class="fs-1">Minuman</h2>
            <hr>

            @foreach ($drinks->groupBy('category.category_name') as $categoryName => $menuItems)
                <div class="category-group">
                    <h3 class="mb-4 mt-4 text-center">
                        <span class="badge text-dark cus-badge">{{ $categoryName }}</span>
                    </h3>
                    <ul class="list-group list-group-flush">
                        @foreach ($menuItems as $drink)
                            <li class="list-group-item d-flex justify-content-between">
                                <p class="fs-5 mb-0">{{ $drink->menu_name }}</p>
                                <p class="mb-0 fs-6">Rp.{{ number_format($drink->price, 0, ',', '.') }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Menampilkan Menu Food -->
        <div class="row mt-4" id="foodsSection" style="display: none;">
            <h2 class="fs-1">Foods</h2>
            <hr>

            @foreach ($foods->groupBy('category.category_name') as $categoryName => $menuItems)
                <div class="category-group">
                    <h3 class="mb-4 mt-4 text-center">
                        <span class="badge text-dark cus-badge">{{ $categoryName }}</span>
                    </h3>
                    <ul class="list-group list-group-flush">
                        @foreach ($menuItems as $food)
                            <li class="list-group-item d-flex justify-content-between">
                                <p class="fs-5 mb-0">{{ $food->menu_name }}</p>
                                <p class="mb-0 fs-6">Rp.{{ number_format($food->price, 0, ',', '.') }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // JavaScript untuk mengatur tampilan kategori
        document.getElementById('showDrinks').addEventListener('click', function() {
            document.getElementById('drinksSection').style.display = 'block';
            document.getElementById('foodsSection').style.display = 'none';
        });

        document.getElementById('showFoods').addEventListener('click', function() {
            document.getElementById('foodsSection').style.display = 'block';
            document.getElementById('drinksSection').style.display = 'none';
        });
    </script>

</x-layout>
