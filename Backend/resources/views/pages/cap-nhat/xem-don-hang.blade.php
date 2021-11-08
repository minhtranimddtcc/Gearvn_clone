@extends('../layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết đơn hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@php

if($order->trang_thai_don_hangs_id==3)
$success='bg-success';
else $success='bg-danger';
switch(  $order->trang_thai_don_hangs_id){
        case 1: 
            $success = 'btn-warning';
            break;
        
        case 2: 
            $success = 'btn-primary';
            break;
        
        case 3: 
            $success = 'btn-info';
            break;
        
        case 4: 
            $success = 'btn-dark';
            break;
        
        case 5: 
            $success = 'btn-success';
            break;
        
        default:
            $success = 'btn-danger';
        
    }
@endphp
<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">

                        <div class="card-tools">

                            <table class="table table-responsive">
                                <tbody>
                                    <tr>
                                        <td class="label">Mã đơn hàng:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol">{{$order->id}}</span></bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Khách hàng:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol">{{$order->TenNguoidung}}</span></bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Địa chỉ:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{$order->DiaChi}}</bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Số điện thoại:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{$order->SDT}}</bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Hình thức thanh toán:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol">{{$order->TenThanhToan}}</span></bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Thời gian mua:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol">{{date_format(date_create($order->ThoiGianMua),'d-m-Y')}}</span></bdi></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Trạng thái:</td>
                                        <td width="2%"></td>
                                      
                                        <td class="alert {{$success}}">
                                           {{$order->TenTrangThai}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Tổng thanh toán:</td>
                                        <td width="2%"></td>
                                        <td class="total">
                                            <span class=" amount"><bdi><span class="woocommerce-Price-currencySymbol myDIV">{{number_format($order->Tongtien, 0, '', ',')}}</span> VNĐ</bdi></span>
                                        </td>
                                    </tr>
                                    @php
                                    $hide=false;
                                    $disabled = '';
                                    if (in_array($order->trang_thai_don_hangs_id, [1,2,4], true)){
                                        $type='comfirm';
                                        $action='Xác nhận';
                                        $btn='btn-info';
                                        if($order->trang_thai_don_hangs_id==4) $disabled='disabled';
                                    } else {
                                        $type='complete';
                                        $btn='btn-success';
                                        $action='Hoàn thành';
                                        if($order->trang_thai_don_hangs_id==5){
                                            $hide=true;
                                        }
                                    }
                                    @endphp
                                    <tr>
                                        @if(!$hide)
                                        <td>
                                            <a class="btn {{$btn}} {{$disabled}}" role="button" 
                                            href='order/complete/{{$order->id}}?type={{ $type}}'>
                                                <i class="fas fa-check"></i>
                                               {{$action}}
                                            </a>
                                        </td>
                                        @endif

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                        <table class="table table-head-fixed table-striped">
                            <thead>

                                <tr>
                                    <th>STT</th>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $stt=0;
                                if (isset($_GET['page'])) {
                                $a=$_GET['page'];
                                }
                                else{
                                $a=1;
                                }
                                $stt=($a-1)*5;
                                @endphp

                                @foreach ($listOrder as $item )
                                @php

                                $stt++;
                                @endphp
                                <tr>
                                    <td>
                                        {{$stt}}
                                    </td>
                                    <td>
                                        <img src="/images/{{$item->AnhDaiDien}}" style="width:70px" />
                                        <a href="/quan-ly-san-pham/update/{{$item->id}}" class="wc-order-item-name">{{$item->TenSanPham}}</a>
                                    </td>
                                    <td>{{number_format($item->DonGia, 0, '', ',')}}</td>
                                    <td>{{$item->SoLuong}}</td>
                                    <td>{{number_format($item->ThanhTien, 0, '', ',')}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <nav aria-label="Page navigation example">
                    {{$listOrder->links()}}
                </nav>

                <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</section>


@endsection