@extends('admin.admin-master')
@section('content')  
                <h6 class="card-body-title">Category list</h6>    
                @if(session('Catupdated'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('Catupdated')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif

                  @if(session('delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    <div class="container page-content">
                    <table id="table-article" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th class="wd-15p">Lp</th>
                        <th class="wd-15p">Name</th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($categories as $category)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if($category->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/categories/edit/'.$category->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            @if($category->status == 1)
                            <a href="{{ url('admin/categories/inactive/'.$category->id) }}" class="btn btn-sm btn-danger">Inactive</a>
                            @else
                            <a href="{{ url('admin/categories/active/'.$category->id) }}" class="btn btn-sm btn-success">Active</a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>
        
    </div>


@endsection