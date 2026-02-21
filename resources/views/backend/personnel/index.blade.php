@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>

    .personnel-header{
        display:flex;
        flex-wrap:wrap;
        gap:12px;
        justify-content:space-between;
        align-items:center;
    }

    .personnel-add-btn{
        display:flex;
        align-items:center;
    }

    .personnel-table-wrapper{
        overflow-x:auto;
        -webkit-overflow-scrolling:touch;
    }

    .personnel-table-wrapper table{
        min-width:700px;
        white-space:nowrap;
    }

    .personnel-table-wrapper th,
    .personnel-table-wrapper td{
        vertical-align:middle;
    }

    .personnel-img{
        width:80px;
        height:80px;
        object-fit:cover;
        border-radius:6px;
        border:1px solid #ddd;
    }

    @media (max-width:768px){

        .personnel-header{
            flex-direction:column;
            align-items:flex-start;
        }

        .personnel-add-btn{
            width:100%;
            justify-content:center;
        }

        .personnel-img{
            width:60px;
            height:60px;
        }

        .personnel-table-wrapper td,
        .personnel-table-wrapper th{
            font-size:13px;
            padding:8px;
        }
    }
</style>
@endpush

<div class="card">
    <div class="card-header personnel-header">
        <h4>Company Personnel</h4>
        <a href="{{ route('dashboard.personnel.create') }}" class="btn btn-primary personnel-add-btn">Add New Personnel</a>
    </div>

    <div class="card-body personnel-table-wrapper">
        @if($personnels->count())
        <table class="table table-bordered">
            <tr>
                <th style="min-width:50px">#</th>
                <th style="min-width:120px">Image</th>
                <th style="min-width:200px">Name</th>
                <th style="min-width:200px">Designation</th>
                <th style="min-width:150px">Action</th>
            </tr>

            @foreach($personnels as $key => $person)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                    @if($person->image)
                        <img class="personnel-img" src="{{ asset('storage/personnels/'.$person->image) }}" alt="{{ $person->name }}">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->designation }}</td>
                <td>
                    <a href="{{ route('dashboard.personnel.edit', $person->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('dashboard.personnel.delete', $person->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @else
            <div class="alert alert-warning">No Personnel found!</div>
        @endif
    </div>
</div>
@endsection
