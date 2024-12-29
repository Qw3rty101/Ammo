<x-admin-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <p class="mb-4">DataTables is a third-party plugin used to generate the demo tables below.</p>

        <!-- Button to Trigger Modal for Adding Menu -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addMenuModal">
            Add Menu
        </button>

        <!-- DataTales Example for Menus -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Menus</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($menus as $menu)
                                <tr>
                                    <td>{{ $menu->menu_name }}</td>
                                    <td>{{ $menu->category->category_name }}</td>
                                    <td>{{ $menu->price }}</td>
                                    <td>{{ $menu->type }}</td>
                                    <td>
                                        <!-- Form for Deleting Menu -->
                                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE') <!-- DELETE Request -->
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Modal for Adding Menu -->
    <div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="addMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMenuModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="menu_name">Menu Name</label>
                            <input type="text" class="form-control" id="menu_name" name="menu_name" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="Food">Food</option>
                                <option value="Drink">Drink</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
