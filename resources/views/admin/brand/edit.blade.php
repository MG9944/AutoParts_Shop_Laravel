@extends('admin.admin-master')
@section('content')
<div class="sl-mainpanel">
    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header">Update brand
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif

                    <form action="{{ route('update.brand') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Brand name</label>
                          <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ $brand->brand_name }}" aria-describedby="emailHelp" >

                          @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection