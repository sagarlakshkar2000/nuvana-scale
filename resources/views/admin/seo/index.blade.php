@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="h4 mb-0 fw-bold" style="color: #1a1e2b;">
            <i class="fas fa-search me-2 text-primary"></i>SEO Management
        </h4>
        <a href="{{ route('admin.seo.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New SEO Rule
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
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4 py-3 border-0 rounded-top-start">URL Path</th>
                            <th class="px-4 py-3 border-0">Meta Title</th>
                            <th class="px-4 py-3 border-0">Robots</th>
                            <th class="px-4 py-3 border-0 text-end rounded-top-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($seos as $seo)
                            <tr>
                                <td class="px-4 py-3 align-middle">
                                    <span class="badge bg-secondary px-3 py-2 fs-6">{{ $seo->url }}</span>
                                </td>
                                <td class="px-4 py-3 align-middle">
                                    {{ Str::limit($seo->meta_title ?? 'N/A', 40) }}
                                </td>
                                <td class="px-4 py-3 align-middle">
                                    <span class="badge bg-info">{{ $seo->robots_meta ?? 'index, follow' }}</span>
                                </td>
                                <td class="px-4 py-3 align-middle text-end">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.seo.destroy', $seo->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this SEO configuration?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <i class="fas fa-search fa-3x text-muted mb-3 d-block"></i>
                                    <h5 class="text-muted">No SEO configurations found</h5>
                                    <p class="text-muted mb-0">Click the "Add New SEO Rule" button to create one.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($seos->hasPages())
            <div class="card-footer bg-white border-0 py-3">
                {{ $seos->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
