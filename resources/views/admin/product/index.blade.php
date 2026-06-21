@extends('layouts.admin')

@section('content')
  <div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0 fw-bold"><i class="fas fa-boxes me-2 text-primary"></i>{{ $title }}</h4>
      <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle me-1"></i> Add Product
      </a>
    </div>

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card shadow-sm border-0 rounded-3">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
              <tr>
                <th class="ps-4">Product Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Status</th>
                <th class="text-end pe-4">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($products as $product)
                <tr>
                  <td class="ps-4">
                    <div class="d-flex align-items-center">
                      @if($product->images->count() > 0)
                        <img src="{{ asset('storage/' . $product->images->first()->image_url) }}" alt="img" class="rounded" style="width: 40px; height: 40px; object-fit: cover; margin-right: 12px;">
                      @else
                        <div class="bg-light rounded d-flex justify-content-center align-items-center text-muted" style="width: 40px; height: 40px; margin-right: 12px;">
                          <i class="fas fa-image"></i>
                        </div>
                      @endif
                      <div>
                        <h6 class="mb-0 fw-semibold">{{ $product->name }}</h6>
                      </div>
                    </div>
                  </td>
                  <td>{{ $product->sku }}</td>
                  <td>{{ $product->category->name ?? 'N/A' }}</td>
                  <td>
                    @if($product->is_active)
                      <span class="badge bg-success">Active</span>
                    @else
                      <span class="badge bg-danger">Inactive</span>
                    @endif
                  </td>
                  <td class="text-end pe-4">
                    <div class="d-flex justify-content-end gap-2">
                      <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                          <i class="fas fa-trash"></i> Delete
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center py-4 text-muted">
                    No products found. <a href="{{ route('admin.products.create') }}">Create one now</a>.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
      @if($products->hasPages())
        <div class="card-footer bg-white py-3">
          {{ $products->links() }}
        </div>
      @endif
    </div>
  </div>
@endsection
