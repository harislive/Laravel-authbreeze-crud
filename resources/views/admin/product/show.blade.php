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
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <td></td>
                        </tr>
                    </thead>

                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
