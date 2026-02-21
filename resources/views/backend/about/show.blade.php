@extends('backend.layout')

@section('backend_content')

@push('backend_css')
<style>
    .action_btn{
        display: inline-flex;
        line-height: 0;
        align-items: center;
    }

    img.about-image{
        width: 100px;
        height: 80px;
        border:1px solid #ccc;
        border-radius:3px;
        padding:2px;
        object-fit: cover;
    }

    .about-header{
        display:flex;
        flex-wrap:wrap;
        gap:12px;
        justify-content:space-between;
        align-items:center;
    }

    .about-table-wrapper{
        overflow-x:auto;
        -webkit-overflow-scrolling:touch;
    }

    .about-table-wrapper table{
        min-width:900px;
        white-space:nowrap;
    }

    .about-table-wrapper th,
    .about-table-wrapper td{
        vertical-align:middle;
    }

    .about-desc{
        white-space: normal !important;
        max-width: 350px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (max-width:768px){
        img.about-image{
            width:70px;
            height:55px;
        }

        .about-header{
            flex-direction:column;
            align-items:flex-start;
        }

        .about-add-btn{
            width:100%;
            justify-content:center;
        }

        .about-table-wrapper td,
        .about-table-wrapper th{
            font-size:13px;
            padding:8px;
        }
    }
</style>
@endpush


<div class="card p-3">
    <div class="card-header about-header">
        <h4 class="mb-0 d-flex"><span><iconify-icon icon="material-symbols:perm-device-information" width="28" height="28"></iconify-icon></span>About Page Details</h4>
        <a class="btn btn-primary d-flex about-add-btn" href="{{ route('dashboard.about.index') }}">Add New About Page<span style="margin-left:10px;"><iconify-icon icon="material-symbols-light:add-box-rounded" width="24" height="24"></iconify-icon></span></a>
    </div>

    <div class="card-body about-table-wrapper">
        @if($about)
            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th style="min-width:200px">Title</th>
                    <th style="min-width:350px">Description</th>
                    <th style="min-width:150px">Image</th>
                    <th style="min-width:150px">Action</th>
                </tr>

                @foreach(['one','two','three'] as $num)
                <tr>
                    <td>{{ $about->{'title'.$num} ?? 'N/A' }}</td>
                    <td class="about-desc">
                        {!! Str::limit(strip_tags($about->{'description'.$num} ?? 'N/A'), 100, '...') !!}
                    </td>

                    <td>
                        @if(!empty($about->{'image'.$num}))
                            <img class="about-image" src="{{ asset('storage/About/'.$about->{'image'.$num}) }}" alt="Image {{ $num }}">
                        @else
                            <span class="badge bg-danger">No Image</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.about.edit', $about->id) }}"><span><iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon></span></a>
                        <form action="{{ route('dashboard.about.delete', $about->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
        @else
            <span class="alert alert-warning d-block mt-3">No About Data Found!</span>
        @endif
    </div>
</div>
@endsection
