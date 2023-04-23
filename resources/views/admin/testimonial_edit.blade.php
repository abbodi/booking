@extends('admin.layout.app')

@section('name', 'Edit testimonial')

@section('right_top_button')
<a href="{{ route('admin_testimonial_view') }}" class="btn btn-primary"><i class="fas fa-plus"></i> view all</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_testimonial_update', $testimonial_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo *</label>
                                    <div>
                                        <img class="w_200" src="{{ asset('uploads/'.$testimonial_data->photo) }}" alt="">
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Photo *</label>
                                    <input type="file" class="form-control" name="photo" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $testimonial_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" value="{{ $testimonial_data->designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">comment</label>
                                    <textarea class="form-control h_100" name="comment" id="" cols="30" rows="10">{{ $testimonial_data->comment }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
