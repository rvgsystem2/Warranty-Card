@extends('backendlayouts.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header bg-dark text-white py-3 px-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <div>
                            <h3 class="mb-1 fw-bold">Warranty Card Details</h3>
                            <p class="mb-0 text-light small">Manage all warranty registrations from one place</p>
                        </div>

                        <form action="{{ route('warentycard.index') }}" method="GET" class="d-flex gap-2">
                            <input type="text"
                                   name="search"
                                   class="form-control"
                                   value="{{ request('search') }}"
                                   placeholder="Search by name, email, city, phone...">
                            <button type="submit" class="btn btn-primary px-4">Search</button>
                            @if(request('search'))
                                <a href="{{ route('warentycard.index') }}" class="btn btn-outline-light">Reset</a>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="px-3 py-3">#</th>
                                    <th class="px-3 py-3">Customer</th>
                                    <th class="px-3 py-3">Contact</th>
                                    <th class="px-3 py-3">Location</th>
                                    <th class="px-3 py-3">Product S/N</th>
                                    <th class="px-3 py-3">Purchase</th>
                                    <th class="px-3 py-3">File</th>
                                    <th class="px-3 py-3">Status</th>
                                    <th class="px-3 py-3 text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($warentycard as $warentycards)
                                    <tr>
                                        <td class="px-3 py-3 fw-semibold">
                                            {{ $warentycard->firstItem() + $loop->index }}
                                        </td>

                                        <td class="px-3 py-3">
                                            <div>
                                                <h6 class="mb-1 fw-bold text-dark">{{ $warentycards->name }}</h6>
                                                <small class="text-muted">{{ $warentycards->email }}</small>
                                            </div>
                                        </td>

                                        <td class="px-3 py-3">
                                            <span class="fw-medium">{{ $warentycards->phone }}</span>
                                        </td>

                                        <td class="px-3 py-3">
                                            <div>
                                                <span class="d-block">{{ $warentycards->city }}</span>
                                                <small class="text-muted">{{ $warentycards->state }}</small>
                                            </div>
                                        </td>

                                        <td class="px-3 py-3">
                                            <span class="badge bg-secondary-subtle text-dark border px-3 py-2">
                                                {{ $warentycards->product_sl_no }}
                                            </span>
                                        </td>

                                        <td class="px-3 py-3">
                                            <div>
                                                <div class="small fw-semibold">{{ $warentycards->purchase_form ?? 'N/A' }}</div>
                                                <small class="text-muted">
                                                    {{ $warentycards->purchase_date ? \Carbon\Carbon::parse($warentycards->purchase_date)->format('d M Y') : 'N/A' }}
                                                </small>
                                            </div>
                                        </td>

                                        <td class="px-3 py-3">
                                            @if ($warentycards->document)
                                                <a href="{{ asset('storage/' . $warentycards->document) }}"
                                                   target="_blank"
                                                   class="btn btn-sm btn-outline-primary rounded-pill">
                                                    View File
                                                </a>
                                            @else
                                                <span class="badge bg-light text-muted border">No File</span>
                                            @endif
                                        </td>

                                        <td class="px-3 py-3">
                                            @if ($warentycards->status === 'pending')
                                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Pending</span>
                                            @elseif($warentycards->status === 'approved')
                                                <span class="badge bg-success px-3 py-2 rounded-pill">Approved</span>
                                           @elseif($warentycards->status === 'disapproved')
    <span class="badge bg-danger px-3 py-2 rounded-pill">Rejected</span>
    @if($warentycards->admin_remark)
        <div class="small text-danger mt-1">
            <strong>Reason:</strong> {{ $warentycards->admin_remark }}
        </div>
    @endif
                                            @else
                                                <span class="badge bg-secondary px-3 py-2 rounded-pill">
                                                    {{ ucfirst($warentycards->status) }}
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-3 py-3 text-center">
                                            <div class="d-flex flex-wrap justify-content-center gap-2">

                                                <a href="{{ route('warentycard.show', ['id' => $warentycards->id]) }}"
                                                   class="btn btn-sm btn-info text-white rounded-pill px-3">
                                                    Show
                                                </a>

                                                <a href="{{ route('warentycard.delete', ['id' => $warentycards->id]) }}"
                                                   onclick="return confirm('Are you sure you want to delete this item?')"
                                                   class="btn btn-sm btn-danger rounded-pill px-3">
                                                    Delete
                                                </a>

                                                @if($warentycards->status === 'pending')
                                                    <form action="{{ route('admin.warranty.approve', $warentycards->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="remark" value="Warranty verified and approved by admin.">
                                                        <button type="submit" class="btn btn-sm btn-success rounded-pill px-3">
                                                            Accept
                                                        </button>
                                                    </form>

                                                    <button type="button"
                                                            class="btn btn-sm btn-warning rounded-pill px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#rejectModal{{ $warentycards->id }}">
                                                        Reject
                                                    </button>
                                                @endif
                                            </div>

                                            {{-- Reject Modal --}}
                                           <div class="modal fade" id="rejectModal{{ $warentycards->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Reject Warranty</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('admin.warranty.reject', $warentycards->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select Reject Reason</label>
                        <select name="reason_option" class="form-select reason-select" onchange="toggleCustomReason(this, {{ $warentycards->id }})">
                            <option value="">-- Select Reason --</option>
                            <option value="Invalid warranty card details">Invalid warranty card details</option>
                            <option value="Invalid product serial number">Invalid product serial number</option>
                            <option value="Invalid purchase proof">Invalid purchase proof</option>
                            <option value="Document not clear">Document not clear</option>
                            <option value="Warranty already expired">Warranty already expired</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3" id="customReasonBox{{ $warentycards->id }}" style="display: none;">
                        <label class="form-label fw-semibold">Custom Reject Reason</label>
                        <textarea name="custom_remark"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter custom reject reason..."></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </div>
            </form>
        </div>
    </div>
</div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-5">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="mb-2" style="font-size: 40px;">📄</div>
                                                <h5 class="text-muted mb-1">No warranty records found</h5>
                                                <p class="text-muted small mb-0">Try searching with another keyword.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                @if ($warentycard->hasPages())
                    <div class="card-footer bg-white border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <div class="text-muted small">
                                Showing {{ $warentycard->firstItem() ?? 0 }} to {{ $warentycard->lastItem() ?? 0 }} of {{ $warentycard->total() }} entries
                            </div>
                            <div>
                                {{ $warentycard->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>


<script>
    function toggleCustomReason(select, id) {
        const customBox = document.getElementById('customReasonBox' + id);
        if (select.value === 'Other') {
            customBox.style.display = 'block';
        } else {
            customBox.style.display = 'none';
            const textarea = customBox.querySelector('textarea');
            if (textarea) {
                textarea.value = '';
            }
        }
    }
</script>
@endsection