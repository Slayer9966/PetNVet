@extends('usernav')
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Owner Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form method="Post" action="{{route('storeOwner')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Name</label>
                            <input required type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">PhoneNumber</label>
                            <input required type="number" name="number" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">email</label>
                            <input required type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                       
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Owner's Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form method="POST" action="{{route('updateOwner')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input required type="text" name="name" class="form-control" id="name"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">PhoneNumber</label>
                            <input required type="number" name="number" class="form-control" id="number">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input required type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unique Password</label>
                            <input required type="password" name="unique_password" class="form-control" id="password">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
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
          
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"><i class="fa-solid fa-user-plus"></i></button>
            <br>
            <br>
            <!-- info and time tracking chart -->
            <div class="row minimal-modern-charts">


                <!-- latest update tracking chart-->
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Owners</h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>

                                        <th>number
                                        </th>
                                        <th>Email</th>
                                        <th>Unique Id</th>
                                        <th>Edit</th>
                                         
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($clients))
                                    @foreach($clients as $item)

                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td>{{$item->Name}}</td>
                                        <td>{{$item->PhoneNumber}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->Unique_Id}}</td>
                                        <td>
                                            <pre><button style="background-color:transparent;border:none;" class="update " value="{{$item->id}}" data-bs-toggle="modal"data-bs-target="#exampleModal1"><i class="fa-regular fa-pen-to-square"></i></button><a href="{{route('deleteOwner',['id' => $item->id])}}"><button style="background-color:transparent;border:none;" class="delete "><i class="fa-regular fa-trash-can"></i></button></a></pre>
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
        console.log(id);
        $('#exampleModal1').modal('show');
        $.ajax({
            type: "GET",
            url: "/editOwner/" + id,
            success: function (response) {

                if (response.status == 404) {
                    $('#success_messege').html("");
                    $('#success_messege').addClass('alert alert-danger');
                    $('#success_messege').text(response.messege);
                }
                else {
                    
                    $('#id').val(response.client.id);
                    $('#name').val(response.client.Name);
                    $('#number').val(response.client.PhoneNumber);

                    $('#email').val(response.client.email);
                   
                }
            }
        })
    })


    
   
</script>


@endsection
