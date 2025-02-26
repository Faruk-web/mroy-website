@extends('admin.master')
@section('title')
    Privacy & Policy Add | {{env('APP_NAME')}}
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
                <h4 class="page-title">New Practice Crate</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{route('practice.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label"> Name</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="name" id="inputEmail34" placeholder="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Designation</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="title" id="inputEmail34" placeholder="designation"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Image size: 394 X 341</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="image" multiple id="inputEmail34" placeholder="Property Image"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Details</label>
                                    <div class="col-10">
                                        <textarea type="text" id="summernote" name="privacy" class="form-control @error('privacy') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter privacy"></textarea>
                                        @error('privacy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Status Practice</label>
                                    <div class="col-10">
                                        <input type="checkbox" id="switch1" class="form-control" value="1" name="status" data-switch="bool"/>
                                        <label for="switch1" data-on-label="yes" data-off-label="no"></label>
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
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
    </script>
    <!-- end row -->



@endsection



