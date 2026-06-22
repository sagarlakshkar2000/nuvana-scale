@extends('layouts.admin')

@section('content')
  <div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0 fw-bold"><i class="fas fa-images me-2 text-primary"></i>Banners</h4>
      <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle me-1"></i> Add Banner
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
                <th class="ps-4">Image</th>
                <th>Title & Subtitle</th>
                <th>Order</th>
                <th>Status</th>
                <th class="text-end pe-4">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($banners as $banner)
                <tr>
                  <td class="ps-4">
                    <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner" class="rounded border shadow-sm" style="width: 120px; height: 50px; object-fit: cover;">
                  </td>
                  <td>
                    <h6 class="mb-0 fw-semibold">{{ $banner->title ?: 'N/A' }}</h6>
                    <small class="text-muted">{{ $banner->subtitle ?: '' }}</small>
                  </td>
                  <td>{{ $banner->order }}</td>
                  <td>
                    @if($banner->is_active)
                      <span class="badge bg-success">Active</span>
                    @else
                      <span class="badge bg-danger">Inactive</span>
                    @endif
                  </td>
                  <td class="text-end pe-4">
                    <div class="d-flex justify-content-end gap-2">
                      <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this banner?');">
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
                    No banners found. <a href="{{ route('admin.banners.create') }}">Create one now</a>.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
