@extends('admin.admin-master')
@section('content')    
                  @if(session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('status')}}</strong>
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
                    <h6 class="card-body-title">Order list</h6> 
                    <div class="container page-content">
                    <table id="table-article" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th class="wd-15p">Lp</th>
                        <th class="wd-15p">Invoice number</th>
                        <th class="wd-15p">Payment type</th>  
                        <th class="wd-20p">Total</th>  
                        <th class="wd-20p">Subtotal</th> 
                        <th class="wd-20p">Status</th> 
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($orders as $row)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>#{{ $row->invoice_no }}</td>
                        <td>{{ $row->payment_type }}%</td>
                        <td>{{ $row->total }} zł</td>
                        <td>{{ $row->subtotal }} zł</td>
                        <td>
                           @if($row->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Inactive</span>
                            @endif</td>
                        </td>
                        <td>
                            <a href="{{ url('admin/orders/view/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('admin/order/delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Czy jestes pewny zeby usunac?')"><i class="fa fa-trash"></i></a>
                            @if($row->status == 1)
                            <a href="{{ url('admin/order/inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->  
        </div>
    </div>
</div>
@endsection