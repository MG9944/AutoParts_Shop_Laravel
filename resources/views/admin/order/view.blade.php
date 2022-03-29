@extends('admin.admin-master')
@section('content')
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Delivery address</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Firts name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="firstname" value="{{ $shipping->shipping_first_name }}" readonly placeholder="Enter First Name">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Last name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="lastname"  placeholder="Enter Last nem" value="{{ $shipping->shipping_last_name }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $shipping->shipping_email }}" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Phone number: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter phone number" value="{{ $shipping->shipping_phone }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Delivery address: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter delivery address" value="{{ $shipping->delivery_address }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter country" value="{{ $shipping->state }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Zip code: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email" placeholder="Enter zip code" value="{{ $shipping->post_code }}" readonly>
                    </div>
                  </div><!-- col-4 -->
                
              </div><!-- row -->
            
            </div><!-- form-layout -->
            
          </div><!-- card -->
       
          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Invoice</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Invoice number: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="firstname" value="{{ $order->invoice_no }}" readonly >
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Payment type: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="lastname"   value="{{ $order->payment_type }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Total: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="total"  value="{{ $order->total }} zl" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Subtotal: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="subtotal"   value="{{ $order->subtotal }} zl" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">Cupon discount: <span class="tx-danger">*</span></label>
                      @if ($order->coupon_discount == NULL)
                      <span class="badge badge-pill badge-danger">NO</span>
                          @else
                          <span class="badge badge-pill badge-danger">{{ $order->coupon_discount }}%</span>
                      @endif
                        
                    </div>
                  </div><!-- col-4 -->
                
              </div><!-- row -->
            
            </div><!-- form-layout -->
            
          </div><!-- card -->

          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Zamowiony produkt</h6>
            <div class="form-layout">
            
                <div class="table-wrapper">
                    <table id="" class="table display responsive nowrap ">
                      <thead>
                        <tr>
                          <th class="wd-15p">Zdjecie</th>
                          <th class="wd-15p">Nazwa produktu</th>
                          <th class="wd-15p">Ilosc</th>
                        </tr>
                      </thead>
                      <tbody>
          
                          @foreach ($orderItems as $row)
                        <tr>
                          <td>
                              <img src="{{ asset($row->product->image_one) }}" height="50px;" width="50px;" alt="img">
                            </td>
                            <td>
                                {{ $row->product->product_name }}
                            </td>

                            <td>
                                {{ $row->product_qty }}
                            </td>
                        </tr>
                        @endforeach
          
                      </tbody>
                    </table>
                  </div><!-- table-wrapper --> 
            </div><!-- form-layout -->
          </div><!-- card -->
    </div>
</div>
@endsection