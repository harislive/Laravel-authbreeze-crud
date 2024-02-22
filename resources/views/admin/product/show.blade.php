<x-admin-layout>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between m-2 p-2">
                <h2>Product List</h2>
                <a href="{{ route('admin.products.index') }}" class="btn btn-success">Back Index</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ Storage::url($product->image) }}" height="100" width="100"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
