@extends('layouts.admin-layout')

@section('content')
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Main Board</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="{{route('deshboard')}}">DeshBoard</a></li>
                                <li class="breadcrumb-item active">Main Board</li>
                            </ol>
                            <form action="{{ route('main.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT')}}
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <h3>Background Image</h3>
                                    <img style="height: 30vh" src="{{ asset($mains->bg_img)}}" class="bg-image">
                                    <input type="file" class="mt-1" id="bg_img" name="bg_img">
                                </div>
                                <div class="form-group col-md-4 mt-2 ms-4">
                                    <div>
                                        <label for="title"> <h4>Title</h4> </label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $mains->title}}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="title"> <h4> Sub Title</h4> </label>
                                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $mains->sub_title}}">
                                    </div>
                                    <div class="mt-3">
                                        <h4>Upload Resume</h4>
                                        <input type="file" class="mt-2" id="resume" name="resume" value="{{ $mains->resume}}">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">                                            
                        </div>
                    </form>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="{{asset('js/admin.js')}}"></script>
        </body>
    </html>
@endsection