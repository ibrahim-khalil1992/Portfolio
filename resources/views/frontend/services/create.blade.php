@extends('layouts.admin-layout')

@section('content')
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Create Page</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="{{route('deshboard')}}">DeshBoard</a></li>
                                <li class="breadcrumb-item active">Create Page</li>
                            </ol>
                            <form action="{{ route('services.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                            <div class="row">
                                <div class="form-group col-md-4 mt-3">
                                    <div class="mb-3">
                                            <label for="icon"><h4>Font Awesome Icon</h4></label>
                                        <input type="text" class="form-control" id="icon" name="icon">
                                    </div>
                                    <div class="mb-3">
                                            <label for="title"><h4>Title</h4></label>
                                            <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="mb-3">
                                            <label for="description"><h4>Description</h4></label>
                                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                                    </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary">
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