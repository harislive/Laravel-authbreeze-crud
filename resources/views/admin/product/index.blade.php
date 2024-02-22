<x-admin-layout>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between m-2 p-2">
                <h2>Product List</h2>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success">Create Item</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-bordored">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td><img src="{{ Storage::url($product->image) }}" height="100" width="100"
                                        alt="image"></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="btn btn-primary">Data Update</a>
                                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info">Show</a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}"
                                            method="POST" onsubmit="return confirm('Are You Sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="text-center">
                                <div class="text-danger">No Found Product</div>
                            </div>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
