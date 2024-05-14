@extends('userNav')
@section('content')
<head>
    <link rel="stylesheet" href="./temp/assets/css/ProductD.css">
</head>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div class="content-body">
            <!-- Your card-based product display starts here -->
            <div class="card-wrapper">
                <!-- Single product card -->
                <div class="card">
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <!-- Add your product images here -->
                                <img style="width:100%;display:block;" src="{{ asset($image->ProductImage) }}" alt="shoe image">
                            </div>
                        </div>
                    </div>

                    <div class="product-content">
                        <!-- Add your product information here -->
                        <h2 class="product-title">{{$image->Name}}</h2>
                        
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                            <div class="card">
                                <div class="card-header latest-update-heading d-flex justify-content-between">
                                    <h4 class="latest-update-heading-title text-bold-500">Available Publications</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Stock Date</t>
                                                <th>Stock Manufacturing Date</t>
                                                <th>Stock Expiry Date</t>
                                                <th>Quantity</th>
                                                <th>SalePrice</th>
                                                <th>Price</th>
                                                <th>Stock Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                     


    
      @foreach($stocks as $item)
      <tr>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->Stock_Manufacturing_Date }}</td>
            <td>{{ $item->Stock_Expiry_Date }}</td>
            <td>{{ $item->product_quantity }}</td>
            <td>{{ $item->product_SalePrice}}</td>
            <td>{{$item->product_price}}</td>
            <td>{{$item->Product_Code}}</td>
           
        
        </tr>
      @endforeach
    

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above card structure for each product -->
            </div>
            <!-- Your card-based product display ends here -->

            <!-- You can keep your existing code for the table here -->
            <br>
            <br>
            <!-- info and time tracking chart -->
            <!-- ... (rest of your existing code for the table) ... -->
        </div>
    </div>
</div>

@endsection
