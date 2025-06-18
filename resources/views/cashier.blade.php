@extends('userNav')
@section('content')


<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>


    <style>
        
        i {
            font-size: 20px;
        }
    </style>
</head>

<!-- Modal for ADD AND UPDATE -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form method="Post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Name</label>
                            <input required type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Quantity</label>
                            <input required type="number" name="quantity" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input required type="number" name="price" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sales Price</label>
                            <input required type="number" name="Sprice" class="form-control" id="exampleInputPassword1">
                        </div>
                       <div class="mb-3">
                       <select class="form-control" name="category">
    <option value="Vaccine">Vaccine</option>
    <option value="Services">Services</option>
    <option value="Product">Product</option>
    <option value="Toys">Toys</option>
                        </select>
                       </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Manufacturing Date</label>
                            <input required type="date" name="manu" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Expiry Date</label>
                            <input required type="date" name="expiry" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea required name="Desc" class="form-control" id="exampleInputPassword1"></textarea>
</div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input required type="file" name="image" id="imageIn">
                        </div>
                        <div id="selectedImage" style="width:100px;"></div>




                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>


            </div>

        </div>
    </div>
</div>
<!--  -->

<!-- Modal for the sell quantity -->


<!--  -->
<!-- Update modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input required type="text" name="name" class="form-control" id="name"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Quantity</label>
                            <input required type="number" name="quantity" class="form-control" id="quantity">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Update Quantity</label><br>
                            <input type="radio" id="add_new" name="update_stock" value="new" checked>
                            <label for="add_new">Add a new stock</label><br>
                            <input type="radio" id="update_previous" name="update_stock" value="previous">
                            <label for="update_previous">Add to previous quantity</label>
                            <input type="radio" id="same" name="update_stock" value="same">
                            <label for="update_previous">No change in Quantity</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input required type="number" name="price" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sales Price</label>
                            <input required type="number" name="Sprice" class="form-control" id="Sprice">
                        </div>
                        <div class="mb-3">
                       <select name="category" id="category">
    <option value="Vaccine">Vaccine</option>
    <option value="Services">Services</option>
    <option value="Product">Product</option>
                        </select>
                       </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Manufacturing Date</label>
                            <input required type="date" name="manu" class="form-control" id="manu">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Expiry Date</label>
                            <input required type="date" name="expiry" class="form-control" id="expiry">
                        </div>
                        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea required name="Desc" class="form-control" id="Desc"></textarea>
</div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Image</label>
                            <input required type="file" name="image" id="Product_Image">
                        </div>
                        <img id="i_image" src="" alt="I_Image" width="100px" class="img-thumbnail">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unique Password</label>
                            <input required type="password" name="unique_password" class="form-control" id="password">
                        </div>


                        <button type="submit" class="btn btn-primary">Add</button>
                </div>


            </div>

        </div>
    </div>
</div>
<!--  -->
<!-- modal for status -->

<!-- end modal -->
<div class="app-content content">

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div class="content-body">
            <!-- Grouped multiple cards for statistics starts here -->


            <!-- Grouped multiple cards for statistics ends here -->


            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
            @foreach($stocksWithExpiry as $items)
            @if($items->Stock_Expiry_Date<=now())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            The Stock with Product Code and Product Id and Name : {{$items->Product_Code}}-{{$items->product_id}}-{{$items->product_name}} is expired.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            @else

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            The Stock with Product Code and Product Id and Name : {{$items->Product_Code}}-{{$items->product_id}}-{{$items->product_name}} is  expiring soon.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
           @endif
            @endforeach

            @foreach($LowStock as $items)
            @if($items->Quantity==0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            The Stock with Product Code and Product Id and Name : {{$items->Product_Code}}-{{$items->id}}-{{$items->Name}} is empty in stock.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            @else

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            The Stock with Product Code and Product Id and Name : {{$items->Product_Code}}-{{$items->id}}-{{$items->Name}} is  low on stock.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
           @endif
            @endforeach
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"><i class="fa-solid fa-cart-plus"></i></button>
            <br>
            <br>
            <!-- info and time tracking chart -->
            <div class="row minimal-modern-charts">


                <!-- latest update tracking chart-->
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Available Products</h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>

                                        <th>Quantity
                                        </th>
                                        <th>Price</th>
                                          <th>Sales Price

                                          </th>
                                        <th>Product Code</th>
                                        <th>Product Image</th>
                                         <th>Category</th>
                                         <th>Description</th>

                                        <th>Edit</th>
                                        <th>See Details</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($Data))
                                    @foreach($Data as $item)

                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td>{{$item->Name}}</td>
                                        <td>{{$item->Quantity}}</td>
                                        <td>{{$item->Price}}</td>
                                        <td>{{$item->SalePrice}}</td>


                                        <td>
                                        <svg id="barcode-{{ $item->id }}"></svg>
    <script>
        console.log('Creating barcode for ProductCode: {{ $item->Product_Code }}');
        console.log('Creating barcode for ProductCode: {{ $item->Product_Code }}');
        JsBarcode("#barcode-{{ $item->id }}", "{{ $item->Product_Code }}", {
            format: "CODE128",
            width: 1,  // Adjust width as needed
            height: 30,  // Adjust height as needed
            displayValue: true
        });
    </script>
        </td>






                                        <td>
                                            <!-- Display the actual image here -->
                                            <a href="{{ asset($item->ProductImage) }}" data-lightbox="{{$item->id}}" data-title="My caption"><img  width="100px" src="{{ asset($item->ProductImage) }}"
                                                alt="Customer Image"></a>
                                        </td>




<td>{{$item->Category}}</td>
<td>{{$item->Description}}</td>
                                        <td>
                                            <pre><button style="background-color:transparent;border:none;" class="update " value="{{$item->id}}" data-bs-toggle="modal"data-bs-target="#exampleModal1"><i class="fa-regular fa-pen-to-square"></i></button><a href="{{route('delete',['id' => $item->id])}}"><button style="background-color:transparent;border:none;" class="delete "><i class="fa-regular fa-trash-can"></i></button></a></pre>
                                        </td>
                                        <td>
                                        <a href="{{ route('detail', ['id' => $item->id]) }}" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @endif
                                </tbody>

                            </table>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



</div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script>

    $(document).on('click', '.update', function (e) {
        e.preventDefault()
        var id = $(this).val()
        $('#exampleModal1').modal('show');
        $.ajax({
            type: "GET",
            url: "/edit1/" + id,
            success: function (response) {

                if (response.status == 404) {
                    $('#success_messege').html("");
                    $('#success_messege').addClass('alert alert-danger');
                    $('#success_messege').text(response.messege);
                }
                else {
                    $('#id').val(response.Products.id);
                    $('#name').val(response.Products.Name);
                    $('#quantity').val(response.Products.Quantity);

                    $('#price').val(response.Products.Price);
                    $('#Sprice').val(response.Products.SalePrice);
                    $('#expiry').val(response.Products.Expiry_Date);
                    $('#manu').val(response.Products.Manufacturing_Date);
                    $('#category').val(response.Products.Category);
                    $('#Desc').val(response.Products.Description);
                    $('#i_image').attr('src', response.Products.ProductImage);
                    $('#imageIn').val(response.Products.ProductImage);
                }
            }
        })
    })

    $(document).ready(function () {
        $('.b').click(function () {
            var id1 = $(this).data('id');
            $('#id1').val(id1);
            console.log(id1);
        });

        $('#Product_Image').on('change', function () {
            var file = this.files[0];
            if (file) {
                // Read the selected image file and display it as a preview
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#i_image').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            } else {
                // Clear the preview if no file is selected
                $('#i_image').attr('src', '');
            }
        });
       
    });
   
</script>


@endsection