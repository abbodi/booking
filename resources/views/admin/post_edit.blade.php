@extends('admin.layout.app')

@section('name', 'Edit Post')

@section('right_top_button')
<a href="{{ route('admin_post_view') }}" class="btn btn-primary"><i class="fas fa-plus"></i> view all</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_update', $post_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo *</label>
                                    <div>
                                        <img class="w_200" src="{{ asset('uploads/'.$post_data->photo) }}" alt="">
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Photo *</label>
                                    <input type="file" class="form-control" name="photo" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $post_data->heading }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Short Content</label>
                                    <textarea class="form-control h_100" cols="30" rows="10" name="short_content">{{ $post_data->short_content }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">content</label>
                                    <textarea class="form-control snote" cols="30" rows="10" name="content">{{ $post_data->content }}</textarea>
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
