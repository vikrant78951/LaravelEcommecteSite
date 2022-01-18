
@extends('master')

@section('content')
    <section class="container my-4 py-4">
        <div class="row">
            <div class="col-md-5 mx-auto border shadow-lg rounded p-4">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password  <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </section>

@endsection