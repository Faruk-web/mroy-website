@extends('admin.master')
@section('title')
    Privacy & Policy Edit | {{env('APP_NAME')}}
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">About Update</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{route('about.update', ['id' => $privacy->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Name</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="name" value="{{$privacy->name}}" id="inputEmail34" placeholder="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Image size: 312 X 288</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="image" id="inputEmail34" placeholder="Property Image"/>
                                        <img src="{{asset($privacy->image)}}" alt="" style="height: 100px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Sub Details</label>
                                    <div class="col-10">
                                        <textarea type="text" id="summernote3" name="sub_details" class="form-control @error('sub_details') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter privacy">{{$privacy->sub_details}}</textarea>
                                        @error('sub_details')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Description</label>
                                    <div class="col-10">
                                        <textarea type="text" id="summernote" name="privacy" class="form-control @error('privacy') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter privacy">{{$privacy->privacy}}</textarea>
                                        @error('privacy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Details</label>
                                    <div class="col-10">
                                        <textarea type="text" id="summernote2" name="details" class="form-control @error('details') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter condition">{{$privacy->details}}</textarea>
                                        @error('details')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Status</label>
                                    <div class="col-10">
                                        <input type="checkbox" id="switch{{$privacy->id}}" class="form-control" value="1" @if($privacy->status == 1) checked @endif name="status" data-switch="bool"/>
                                        <label for="switch{{$privacy->id}}" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label"></label>
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <script>
        $('#summernote').summernote({
            tabsize: 5,
            height: 500
        });

        $('#summernote2').summernote({
            tabsize: 5,
            height: 500
        });
        $('#summernote3').summernote({
            tabsize: 5,
            height: 150
        });
    </script>

@endsection



