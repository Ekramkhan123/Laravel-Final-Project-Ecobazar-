@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>

    .customer-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .customer-table-wrapper table {
        min-width: 700px;
        white-space: nowrap;
    }

    .customer-table-wrapper th,
    .customer-table-wrapper td {
        vertical-align: middle;
    }

    .customer-action-btn {
        display: inline-flex;
        align-items: center;
    }

    @media (max-width:768px){
        .customer-table-wrapper td,
        .customer-table-wrapper th {
            font-size: 13px;
            padding: 8px;
        }

        .customer-action-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endpush

<div class="container p-3">
    <h4 class="mb-4">Customer List</h4>

    <div class="customer-table-wrapper">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th style="min-width:50px">#</th>
                    <th style="min-width:200px">Name</th>
                    <th style="min-width:200px">Email</th>
                    <th style="min-width:150px">Phone</th>
                    <th style="min-width:100px">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->fname }} {{ $customer->lname }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('dashboard.customers.show', $customer->id) }}"
                               class="btn btn-sm btn-primary customer-action-btn">
                                View
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            <span class="alert alert-warning d-block mt-2">No customers found!</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
