<x-admin-layout>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between m-2 p-2">
                <h2>Product List</h2>
                <a href="{{ route('admin.products.index') }}" class="btn btn-success">Item List</a>
            </div>
        </div>
        <form action="{{ route('admin.products.index') }}" enctype="multipart/form-data" method="post" class="container">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" name="name" id="name"
                    placeholder="Write Item Name" />
                <div class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description<sup class="text-danger">*</sup></label>
                <textarea  class="form-control" name="description" id="description"
                    placeholder="Write Item description" ></textarea>
                <div class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price<sup class="text-danger">*</sup></label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Write Item price" />
                <div class="text-danger">
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image<sup class="text-danger">*</sup></label>
                <input type="file" class="form-control" name="image" id="image"
                    placeholder="Write Item image" />
                <div class="text-danger">
                    @error('image')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>

        </form>
    </div>
</x-admin-layout>
