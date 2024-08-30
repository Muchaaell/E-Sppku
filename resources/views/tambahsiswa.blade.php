@extends('layout.master')
@section('content')
<div class="page-heading">
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>DataTable</h3>
            <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title">
                {{$page }}
            </h5>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">First Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"
                                        placeholder="Input with icon left" id="first-name-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Email</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Email"
                                        id="email-id-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="mobile-id-icon">Mobile</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Mobile"
                                        id="mobile-id-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="password-id-icon">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Password"
                                        id="password-id-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class='form-check'>
                                <div class="checkbox mt-2">
                                    <input type="checkbox" id="remember-me-v" class='form-check-input'
                                        checked>
                                    <label for="remember-me-v">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset"
                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
@endsection