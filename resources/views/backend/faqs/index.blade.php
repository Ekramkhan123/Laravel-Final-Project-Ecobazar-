@extends('backend.layout')

@section('backend_content')


    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0 d-flex"><span><iconify-icon icon="material-symbols:note-add-outline-sharp" width="24" height="24"></iconify-icon></span>Faqs Add</h4>
            <a class="btn btn-primary" href="{{ Route('dashboard.faq.show') }}">Show All</a>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.faq.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <label class="mb-1" for="question">Question <span class="text-danger">*</span></label>
                        <input type="text" name="question" id="question" class="form-control p-2 mb-3" placeholder="Enter question" value="">

                        @error('question')
                            <div class="text-danger mb-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <label class="mb-1" for="answers">Answers:</label>
                        <textarea style="width: 100%; height:100px; border-radius:20px; padding: 10px;" name="answers" placeholder="Write The Answer"></textarea>

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

