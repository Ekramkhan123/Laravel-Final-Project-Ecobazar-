@extends('backend.layout')
@section('backend_content')

@push('backend_css')

<style>
    .faq-header{
        display:flex;
        flex-wrap:wrap;
        gap:12px;
        justify-content:space-between;
        align-items:center;
    }

    .faq-actions{
        display:flex;
        flex-wrap:wrap;
        gap:10px;
        align-items:center;
    }

    .faq-btn{
        display:flex;
        align-items:center;
        gap:6px;
    }

    .faq-image{
        width:100px;
        height:100px;
        object-fit:cover;
        border-radius:6px;
    }

    .action_btn{
        display: inline-flex;
        line-height: 0;
        align-items: center;
    }

    .faq-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .faq-table-wrapper table {
        min-width: 900px;
        white-space: nowrap;
    }

    .faq-table-wrapper th,
    .faq-table-wrapper td {
        vertical-align: middle;
    }

    @media (max-width: 576px) {
        .faq-header{
            flex-direction:column;
            align-items:flex-start;
        }

        .faq-table-wrapper td,
        .faq-table-wrapper th {
            font-size: 13px;
            padding: 8px;
        }

        .faq-actions{
            width:100%;
        }

        .faq-btn{
            width:100%;
            justify-content:center;
        }

        .faq-image{
            width:70px;
            height:70px;
        }
        
    }
</style>

@endpush

    <div class="card p-3">
        <div class="card-header faq-header">

            <h4 class="mb-0 d-flex">
                <iconify-icon icon="material-symbols:perm-device-information" width="28" height="28"></iconify-icon>
                Formation of FAQs
            </h4>

            <div class="faq-actions">

                <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.faq.imageedit') }}">
                    <iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon>
                </a>

                @if(!empty($faqimage) && !empty($faqimage->image))
                    <img class="faq-image" src="{{ asset('storage/Faqs/'.$faqimage->image) }}" alt="FAQ Image">
                @endif

                <a class="btn btn-dark faq-btn" href="{{ Route('dashboard.faq.image') }}">
                    Add FAQ Image
                    <iconify-icon icon="material-symbols-light:add-box-rounded" width="22" height="22"></iconify-icon>
                </a>

                <a class="btn btn-primary faq-btn" href="{{ Route('dashboard.faq.index') }}">
                    Add New FAQ
                    <iconify-icon icon="material-symbols-light:add-box-rounded" width="22" height="22"></iconify-icon>
                </a>

            </div>

        </div>

        <div class="card-body faq-table-wrapper">
            <div class="img">
                <img src="" alt="">
            </div>
            <table class="table table-hover table-bordered table-striped">
                <tr style="text-align:center">
                    <th style="min-width:60px">#</th>
                    <th style="min-width:250px">Question</th>
                    <th style="min-width:350px">Answer</th>
                    <th style="min-width:150px">Action</th>
                </tr>
                @forelse($faq as $key=>$faq)
                    <tr style="justify-content:start; align-items:center; text-align:start">
                        <td>{{ ++$key }}</td>
                        <td>{{ $faq->question }}</td>
                        <td style="white-space:normal;max-width:350px">
                            {!! Str::limit($faq->answers ?? 'N/A', 100, '...') !!}
                        </td>

                         <td>
                            <a class="btn btn-primary btn-sm action_btn" href="{{ route('dashboard.faq.edit', $faq->id) }}"><span><iconify-icon icon="mdi:edit-box-outline" width="24" height="24"></iconify-icon></span></a>
                            <a class="btn btn-danger btn-sm action_btn" href="{{ route('dashboard.faq.delete', $faq->id) }}"><span><iconify-icon icon="mdi:delete-outline" width="24" height="24"></iconify-icon></span></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="w-100 text-center">
                            <span class="alert alert-danger d-block mt-3">No FAQ Found !!!</span>
                        </td>
                    </tr>
                
                @endforelse

            </table>

        </div>
    </div>
@endsection