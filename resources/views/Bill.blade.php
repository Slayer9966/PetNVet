@extends('userNav')
@section('content')









<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        i {
            font-size: 20px;
        }
    </style>
</head>

<!--Modal for Vaccine-->
<div>
<div class="modal fade" id="exampleModalVaccine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vaccine</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form method="Post" action="{{ route('storeHistory') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label for="ownerSelectAdd" class="form-label">Owners</label>
                            <select id="ownerSelectAdd" class="form-control ownerSelect" name="Owner" required>
                                <!-- Options will be populated here by JavaScript -->
                              
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Pet" class="form-label">Pets</label>
                            <select id="Pet" class="form-control ownerSelect" name="Pet_Id" required>
                                <!-- Options will be populated here by JavaScript -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Vaccines" class="form-label">Vaccines</label>
                            <select id="Vaccines" class="form-control ownerSelect" name="vaccine" required>
                                <!-- Options will be populated here by JavaScript -->
                            </select>
                        </div>
                        <input type="hidden" id="vaccineNameInput" name="vaccineName">
                        <div class="mb-3">
                            <label for="nextVaccineDate" class="form-label">Next Vaccine Date</label>
                            <input type="date" id="nextVaccineDate" class="form-control" name="next_vaccine_date" required>
                        </div>

                       
                        
<br>
<br>
                            <button type="submit" class="btn btn-primary">Do Vaccine</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 </div>
</div>


<!--  -->

<!-- Modal for the sell quantity -->
<div class="modal fade" id="exampleModalsell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Quantity</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form method="post" action="{{ route('UpdateBill') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" id="product_id" name="product_id">

                            <label for="quantity" class="form-label">Quantity</label>
                            <input required type="number" name="quantity" class="form-control" id="quantity"
                                aria-describedby="emailHelp">

                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="1" id="addToExistingQuantity"
                                    name="addToExistingQuantity">
                                <label class="form-check-label" for="addToExistingQuantity">
                                    Add to Existing Quantity
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="useNewQuantity"
                                    name="useNewQuantity">
                                <label class="form-check-label" for="useNewQuantity">
                                    Use New Quantity
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>

                </div>


            </div>

        </div>
    </div>
</div>

<!-- Table for vaccine bill -->


<!-- End -->
<div class="app-content content">

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div class="content-body">
            <!-- Grouped multiple cards for statistics starts here -->


            <!-- Grouped multiple cards for statistics ends here -->


            <!-- Minimal modern charts for power consumption, region statistics and sales etc. starts here -->
            <button class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModalVaccine"
            data-bs-whatever="@mdo"><i class="fa-solid fa-syringe"></i></button>
          
            <br>
            <br>
        
            <!-- info and time tracking chart -->
            <div class="row minimal-modern-charts">
<!-- Vaccine bill -->

<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                  
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Vaccine Bill</h4>

                        </div>
                        <div class="table-responsive">
                          
                            <table id="vaccineBill" class="table table-striped table-bordered zero-configuration">
    <!-- Table headers and other rows -->
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Available Quantity</th>
            <th>Product Price</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userBills as $item)
        @if($item->Category=="Vaccine")
            <tr>
                <td>{{$item->product_name}}</td>
                <td> <input type="number"  class="-input" data-product-id="{{$item->id}} {{$item->product_id}}" class="available-quantity" placeholder="Loading..." ></td>
                <td><input type="text"  value="{{$item->product_SalePrice}}"></td>
              <td><pre><a href="{{ route('deleteBill', ['id' => $item->id]) }}"><button style="background-color:transparent;border:none;" class="delete"><i class="fa-regular fa-trash-can"></i></button></a></pre></td>
                    
            </tr>
            @endif
        @endforeach
    </tbody>
</table>

                            <a href="{{ route('Sell', ['action' => 'Vaccine_Purchase']) }}"><button class="btn btn-primary">Confirm Purchase</button></a>
                        </div>

                    </div>
                </div>
<!-- End -->
<!-- End -->
                <!-- latest update tracking chart-->
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Products Bill</h4>

                        </div>
                        <div class="table-responsive">
                          
                            <table id="billTable" class="table table-striped table-bordered zero-configuration">
    <!-- Table headers and other rows -->
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Available Quantity</th>
            <th>Product Price</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userBills as $item)
            
            <tr>
                <td>{{$item->product_name}}</td>
                <td> <input type="number"  class="-input" data-product-id="{{$item->id}} {{$item->product_id}}" class="available-quantity" placeholder="Loading..." ></td>
                <td><input type="text"  value="{{$item->product_SalePrice}}"></td>
              <td><pre><a href="{{ route('deleteBill', ['id' => $item->id]) }}"><button style="background-color:transparent;border:none;" class="delete"><i class="fa-regular fa-trash-can"></i></button></a></pre></td>
                    
            </tr>
          
        @endforeach
    </tbody>
</table>

                            <a href="{{ route('Sell', ['action' => 'Product_purchase']) }}"><button class="btn btn-primary">Confirm Purchase</button></a>
                        </div>

                    </div>
                </div>

<!-- Bill Table for Vaccine -->


<!-- End bill table for Vaccine -->

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 latest-update-tracking">
                    <div class="card">
                        <div class="card-header latest-update-heading d-flex justify-content-between">
                            <h4 class="latest-update-heading-title text-bold-500">Products</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Product</th>
                                        <th>Sell</th>
                                        <!-- Add more columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Use a different loop and replace $userBills with the relevant data for the second table -->
                                    @foreach($Products as $item)
                                    <tr >
                                        <td>{{$item->Name}}</td>
                                        <td>{{$item->SalePrice}}</td>
                                        <td>{{$item->Quantity}}</td>
                                        <td><img src="{{asset($item->ProductImage)}}" width="70px" alt=""></td>
                                        <td> <button class="btn btn-primary" 
                                                data-product-id="{{$item->id}}">Sell</button>
                                        </td>
                                        <!-- Add more cells based on the columns in your second table -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Add any additional content or buttons for the second table -->
                         
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
<!-- Modal for Vaccination of Pet -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
   $(document).ready(function () {
  



    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('body').on('change', '.-input', function () {
    console.log("changed");
    var productIds = $(this).attr('data-product-id').split(' ');
    var Id = productIds[0];
    var PId = productIds[1];
    var enteredQuantity = $(this).val();

    // Send AJAX request to fetch the total quantity
    getTotalQuantityAsync(PId, function (availableQuantity) {
        if (enteredQuantity <= availableQuantity) {
            // The entered quantity is within the available quantity limit

            // Send AJAX request to update the database
            $.ajax({
                url: '/InputQuantity',
                method: 'POST',
                data: {
                    Id: Id,
                    quantity: enteredQuantity
                },
                success: function (response) {
                    // Handle success if needed
                    console.log(response);
                },
                error: function (error) {
                    // Handle error if needed
                    console.error(error);
                }
            });
        } else {
            // The entered quantity exceeds the available quantity
            console.log('Entered quantity exceeds available quantity');
            // You can display a message or take other actions as needed
        }
    });
});
    $('.btn-primary').on('click', function () {
        var productId = $(this).data('product-id');

        $.ajax({
            url: '{{ route("Add") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
            },
            success: function (response) {
                if (response.success) {
                    // Fetch updated bill data
                    updateBillTable(); // Call the function to update the table
                } else {
                    console.error('Failed to add item to the bill');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX request failed', error);
            },
        });
    });

    // Function to update the HTML content of the bill table
    function updateBillTable() {
        $.ajax({
            url: '{{ route("getUpdatedBill") }}',
            type: 'GET',
            success: function (response) {
                // Update the HTML table with the new data
                updateTable(response.updatedBill);
            },
            error: function (xhr, status, error) {
                console.error('Failed to fetch updated bill data', error);
            },
        });
    }

    // Update the HTML table with new data
    function updateTable(updatedBill) {
        var tableBody = $('#billTable tbody');
        var tableBody1 = $('#vaccineBill tbody');
        tableBody.empty(); // Clear existing content
        tableBody1.empty();

        // Loop through the updated data and append rows to the table
        updatedBill.forEach(function (item) {
    // Fetch total quantity asynchronously
    getTotalQuantityAsync(item.product_id, function (totalQuantity) {
        var row = '<tr>' +
            '<td>' + item.product_name + '</td>' +
            '<td><input type="text" class="-input" data-product-id="' + item.id + ' '+item.product_id+'" placeholder="available quantity ' + totalQuantity + '"></td>' +
            '<td><input type="text"  value="' + item.product_price + '"></td>' +
           
            '<td><pre><a href="{{ route("deleteBill", ["id" => ":id"]) }}'.replace(':id', item.id) + '"><button style="background-color:transparent;border:none;" class="delete"><i class="fa-regular fa-trash-can"></i></button></a></pre></td>' +
            '</tr>';
        if(item.Category=="Vaccine"){
            tableBody1.append(row);
        }
        else{
            tableBody.append(row);
        }
    });
});
    }

    // Call the updateBillTable function initially or based on your requirements
    updateBillTable();

    function getTotalQuantityAsync(productId, callback) {
    $.ajax({
        url: '/getTotalQuantity/' + productId,
        type: 'GET',
        success: function (response) {
            callback(response.totalQuantity || 0);
        },
        error: function (error) {
            console.error('Failed to fetch total quantity', error);
            callback(0);
        },
    });
}

function updateAvailableQuantity() {
        $('.available-quantity').each(function () {
            var productId = $(this).data('product-id');
            var inputField = $(this);

            // AJAX request to fetch total quantity
            $.ajax({
                url: '/getTotalQuantity/' + productId,
                type: 'GET',
                success: function (response) {
                    inputField.val(response.totalQuantity || 0);
                },
                error: function (error) {
                    console.error('Failed to fetch total quantity', error);
                    inputField.val(0);
                },
            });
        });
       
    }
});
// Function for DOING VACCINATION
async function fetchOwnerDetails() {
    try {
        const response = await fetch('/getOwners1'); // Route to fetch owners
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        console.log('Fetched owner details:', data); // Debug log for fetched data
        return data;
    } catch (error) {
        console.error('Error fetching owner details:', error);
    }
}

function populateSelectOptions(selectElement, data, formatOptionText, defaultText = 'Select an option') {
    // Clear existing options
    selectElement.innerHTML = '';

    // Add default option
    const defaultOption = document.createElement('option');
    defaultOption.value = ''; // Set the value to an empty string
    defaultOption.textContent = defaultText; // Set the default text
    defaultOption.disabled = true; // Make it non-selectable
    defaultOption.selected = true; // Set it as the default selection
    selectElement.appendChild(defaultOption);

    // Check if this is the vaccine select element
    const isVaccineSelect = selectElement.id === 'Vaccines';

    // Add dynamic options
    data.forEach(item => {
        const option = document.createElement('option');
        if (isVaccineSelect) {
            option.value = item.id;
            option.setAttribute('data-name', item.Name); // Use vaccine name as value for vaccine select
        } else {
            option.value = item.id; // Use ID for other selects
        }
        option.textContent = formatOptionText(item);
        selectElement.appendChild(option);
        console.log(`Added option: ${option.value} - ${option.textContent}`); // Debug log for each option
    });
}

function setVaccineName() {
    const select = document.getElementById('Vaccines');
    const selectedOption = select.options[select.selectedIndex];
    const vaccineName = selectedOption.getAttribute('data-name');
    document.getElementById('vaccineNameInput').value = vaccineName;
}
document.getElementById('Vaccines').addEventListener('change', setVaccineName);


async function fetchPets(ownerId) {
    try {
        console.log('Fetching pets for owner ID:', ownerId); // Debug log
        const response = await fetch(`/getPets/${ownerId}`);
        if (!response.ok) {
            console.error('Network response was not ok:', response.statusText); // Debug log
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        console.log('Fetched pets:', data); // Debug log for fetched data
        return data;
    } catch (error) {
        console.error('Error fetching pets:', error);
    }
}



async function fetchVaccines() {
    try {
        const response = await fetch('/getVaccines'); // Route to fetch vaccine products
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        console.log('Fetched vaccines:', data);
        return data;
    } catch (error) {
        console.error('Error fetching vaccines:', error);
    }
}

async function updateOwnerSelect() {
    const owners = await fetchOwnerDetails();
    if (owners && owners.length > 0) {
        const ownerSelect = document.querySelector('#ownerSelectAdd');
        populateSelectOptions(ownerSelect, owners, owner => `${owner.Unique_Id} - ${owner.Name}`, 'Select an Owner');
    } else {
        const ownerSelect = document.querySelector('#ownerSelectAdd');
        populateSelectOptions(ownerSelect, [], () => 'No options available', 'Select an Owner');
    }
}


async function updatePetSelect(ownerId) {
    const pets = await fetchPets(ownerId);
    const petSelect = document.querySelector('#Pet');
    if (pets && pets.length > 0) {
        populateSelectOptions(petSelect, pets, pet => pet.PetName || pet.Name || 'Unknown', 'Select a Pet');
    } else {
        populateSelectOptions(petSelect, [], () => 'No options available', 'Select a Pet');
    }
}



async function updateVaccineSelect() {
    const vaccines = await fetchVaccines();
    const vaccineSelect = document.querySelector('#Vaccines');
    if (vaccines && vaccines.length > 0) {
        populateSelectOptions(vaccineSelect, vaccines, vaccine => vaccine.Name, 'Select a Vaccine');
    } else {
        populateSelectOptions(vaccineSelect, [], () => 'No options available', 'Select a Vaccine');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateOwnerSelect(); // Initial population of owners
    updateVaccineSelect(); // Initial population of vaccines

    document.querySelector('#ownerSelectAdd').addEventListener('change', (event) => {
        const ownerId = event.target.value;
        console.log('Owner selected:', ownerId); // Debug log
        updatePetSelect(ownerId); // Call the function with the selected owner ID
    });
});


</script>


@endsection