@extends('layouts.admin-layout')

@section('content')
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">About</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="{{route('deshboard')}}">DeshBoard</a></li>
                                <li class="breadcrumb-item active">Main Board</li>
                            </ol>                                            
                        </div>
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