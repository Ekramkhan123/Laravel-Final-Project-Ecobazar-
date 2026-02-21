@extends('backend.layout')

@section('backend_content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title d-flex mb-0"><span style="padding-right:7px;"><iconify-icon icon="zondicons:edit-copy" width="20" height="20"></iconify-icon></iconify-icon></span>FAQ Edit</h4>
            <a class="btn btn-primary" href="{{ Route('dashboard.faq.show') }}">Show All</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.faq.update', $edit_faq->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="row">
                    <div class="col-lg-12">
                        <label class="mb-1" for="question">Question <span class="text-danger">*</span></label>
                        <input type="text" value="{{ $edit_faq->question }}" name="question" id="question" class="form-control p-2 mb-3" placeholder="Enter question" value="">

                        @error('question')
                            <div class="text-danger mb-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <label class="mb-1" for="answers">Answers:</label>

                        <textarea style="width: 100%; height:100px;" name="answers">{!! $edit_faq->answers !!}</textarea>

                        @error('answers')
                            <div class="text-danger mb-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary p-3 w-100">Uploads</button>
                    </div>
                </div>
            
            </form>

        </div>
    </div>
@endsection

