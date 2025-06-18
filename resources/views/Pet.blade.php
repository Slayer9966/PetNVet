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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Pet Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form method="Post" action="{{ route('storePet') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label for="ownerSelectAdd" class="form-label">Owners</label>
                            <select id="ownerSelectAdd" class="form-control ownerSelect" name="Owner" required>
                                <!-- Options will be populated here by JavaScript -->
                            </select>
                        </div>
                            <div class="mb-3">
                                <label for="petName" class="form-label">Pet Name</label>
                                <input required type="text" name="petname" class="form-control" >
                            </div>

                           
                            <div class="mb-3">
                                <label for="species" class="form-label">Species</label>
                                <input required type="text" name="spicies" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="species" class="form-label">Breed</label>
                                <input required type="text" name="breed" class="form-control" >
                            </div>
                            <div class="mb-3">
    <label for="species" class="form-label">Description</label>
    <textarea required name="Desc" class="form-control" ></textarea>
</div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>  
<!-- Update modal -->


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
                data-bs-whatever="@mdo"><i class="fa-solid fa-paw"></i></button>
            <br>
            <br>
            <!-- info and time tracking chart -->
            <div class="row minimal-modern-charts">


                <!-- latest update tracking chart-->
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Pets</h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                    <th>Pet Name</th>
                <th>Owner Name</th>
                <th>Owner Email</th>
                <th>Species</th>
                <th>Breed</th>
                <th>Description</th>
                                        <th>Edit</th>
                                        <th>Vaccine Detail</th>
                                         
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pets as $pet)
                <tr>
                <td>{{ $pet->PetName }}</td>
                    <td>{{ $pet->owner_name }}</td>
                    <td>{{ $pet->owner_email }}</td>
                    <td>{{ $pet->Species }}</td>
                    <td>{{ $pet->Breed }}</td>
                    <td>{{ $pet->Description }}</td>
                    <td>
                                            <pre><button style="background-color:transparent;border:none;" class="update " value="{{$pet->id}}" data-bs-toggle="modal"data-bs-target="#exampleModal1"><i class="fa-regular fa-pen-to-square"></i></button><a href="{{route('deleteOwner',['id' => $pet->id])}}"><button style="background-color:transparent;border:none;" class="delete "><i class="fa-regular fa-trash-can"></i></button></a></pre>
                                        </td>
                                        <td>
                                        <a href="{{ route('vaccineDetail', ['id' => $pet->id]) }}" class="btn btn-primary">Vaccine Detail</a>
                                        </td>
                </tr>
            @endforeach
                                       
                                       
                                    

                                   
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
<div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Pet Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <form method="POST" action="{{ route('updatePet') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="mb-3">
                            <label for="ownerSelectUpdate" class="form-label">Owners</label>
                            <select id="ownerSelectUpdate" class="form-control ownerSelect" name="Owner" required>
                                <!-- Options will be populated here by JavaScript -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="petName" class="form-label">Pet Name</label>
                            <input required type="text" name="petname" class="form-control" id="petName">
                        </div>
                       
                        <div class="mb-3">
                            <label for="species" class="form-label">Species</label>
                            <input required type="text" name="spicies" class="form-control" id="species">
                        </div>
                        <div class="mb-3">
                                <label for="species" class="form-label">Breed</label>
                                <input required type="text" name="breed" id="breed" class="form-control" >
                            </div>
                            <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea required name="Desc" id="Desc" class="form-control" ></textarea>
                        <div class="mb-3">
                            <label for="uniquePassword" class="form-label">Unique Password</label>
                            <input required type="password" name="unique_password" class="form-control" id="uniquePassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script>





document.addEventListener('DOMContentLoaded', function() {
//    Functoins for owner search
async function fetchOwnerDetails() {
    try {
        const response = await fetch('/getOwners'); // Use your route here
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        console.log('Fetched owner details:', data); // Debug log for fetched data
        return data; // Assuming data is an array of owner details
    } catch (error) {
        console.error('Error fetching owner details:', error);
    }
}

function populateSelectOptions(selectElements, owners) {
    selectElements.forEach(select => {
        select.innerHTML = ''; // Clear existing options
        owners.forEach(owner => {
            const option = document.createElement('option');
            option.value = owner.id;
            option.textContent = `${owner.email} - ${owner.Name}`; // Adjust according to your owner's name property
            select.appendChild(option);
            console.log(`Added option: ${owner.id} - ${owner.Name}-${owner.email}`); // Debug log for each option
        });
    });
}

async function updateOwnerSelect() {
    const owners = await fetchOwnerDetails();
    if (owners && owners.length > 0) {
        const selectElements = document.querySelectorAll('.ownerSelect');
        populateSelectOptions(selectElements, owners);
    } else {
        console.log('No owners found');
    }
}

// Call the function to update the select options
updateOwnerSelect();

// Functios for update ajax requests
$(document).on('click', '.update', function (e) {
    e.preventDefault();
    var id = $(this).val();
    console.log(id);
    $('#exampleModal1').modal('show');
    $.ajax({
        type: "GET",
        url: "/editPet/" + id,
        success: function (response) {
            if (response.status == 404) {
                $('#success_messege').html("");
                $('#success_messege').addClass('alert alert-danger');
                $('#success_messege').text(response.messege);
            } else {
                $('#id').val(response.pet.id);
                $('#petName').val(response.pet.PetName);
                $('#species').val(response.pet.Species);
                $('#breed').val(response.pet.Breed);
                $('#Desc').val(response.pet.Description);

                // Set the selected value for owner
                $('#ownerSelectUpdate').val(response.pet.Owner_Id);

                // Manually trigger a change event to update the display if needed
                $('#ownerSelectUpdate').trigger('change');
            }
        }
    });
});
})

</script>


@endsection
