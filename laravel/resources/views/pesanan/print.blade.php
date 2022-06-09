
<title>Laporan penjualan</title>
<link rel="stylesheet" href="{{url('')}}/assets/css/style.css" />
<link rel="stylesheet" href="{{url('')}}/assets/css/responsive.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <form action="#" method="post">
            <div class="wishlist-table table-content text-nowrap table-responsive py-2">
                <table class="table table-bordered align-middle">
                    <thead class="bg-light thead-bg">
                        <tr>
                            <th class="product-prices text-center alt-font">Order no</th>
                            <th class="product-name alt-font">Order date</th>
                            <th class="stock-status text-center alt-font">Status</th>
                            <th class="stock-status text-center alt-font">Order Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $grandtotal=0;
                        @endphp
                    @foreach($orders as $product)
                    @php
                        $grandtotal= $grandtotal+$product->order_total;
                        @endphp
                        <tr>
                            <td class="product-thumbnail text-center">
                            {{$product->order_no}}
                            </td>
                            <td class="product-name">{{date('Y-m-d H:i',strtotime($product->order_date))}}</td>
                            <td class="stock text-center">
                                    <span class="text-in-stock">{{$product->order_status}}</span>
                            </td>
                            <td class="product-prices text-right"><span class="amount fw-500">Rp. {{number_format($product->order_total)}}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <thead class="bg-light thead-bg">
                        <tr>
                            <th class="product-prices text-center alt-font"></th>
                            <th class="product-name alt-font"></th>
                            <th class="stock-status text-center alt-font"></th>
                            <th class="stock-status text-right alt-font">Rp. {{number_format($grandtotal)}}</th>
                    </thead>
                </table>
            </div>
        </form>
