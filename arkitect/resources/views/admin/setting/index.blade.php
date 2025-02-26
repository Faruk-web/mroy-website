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
                <h4 class="page-title">New Setting Crate</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{route('setting.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Website Name</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="name" id="inputEmail34" placeholder="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Website logo size: 200 X 60</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="logo" multiple id="inputEmail34" placeholder="logo"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Primary Phone</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="p_phone" id="inputEmail34" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Secondary Phone</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="s_phone" id="inputEmail34" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Default Phone</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="d_phone" id="inputEmail34" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Primary Phone</label>
                                    <div class="col-9">
                                        <input type="email" class="form-control" name="p_mail" id="inputEmail34" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Secondary Phone</label>
                                    <div class="col-9">
                                        <input type="email" class="form-control" name="s_mail" id="inputEmail34" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Location</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="location" id="inputEmail34" placeholder="location"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail34" class="col-3 col-form-label">Website Footer logo size: 80 X 90</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="f_logo" multiple id="inputEmail34" placeholder="logo"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Website Footer Details</label>
                                    <div class="col-10">
                                        <textarea type="text" id="summernote" name="privacy" class="form-control @error('privacy') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter privacy"></textarea>
                                        @error('privacy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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



