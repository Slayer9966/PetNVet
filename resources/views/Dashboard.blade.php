@extends('usernav')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        } */

        /* Basic reset */
/* Basic reset */
h1, h2, p, ul {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Header styling */
header {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
}

/* Filter form styling */
.filter-form {
    padding: 2em;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 2em 0;
    width: 100%;
}

.filter-form form {
    display: flex;
    flex-direction: column;
    gap: 1em;
}

.filter-form label {
    font-weight: bold;
}

.filter-form input[type="date"] {
    padding: 0.5em;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.filter-form button {
    padding: 0.75em;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
}

.filter-form button:hover {
    background-color: #0056b3;
}

/* Main container styling */
main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2em;
}

/* Cards container styling */
.cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1em;
    justify-content: center;
    width: 100%;
}

/* Card styling */
.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 1em;
    padding: 1.5em;
    flex: 1;
    min-width: 200px;
    max-width: 300px;
}

/* Card header styling */
.card h2 {
    margin-bottom: 0.5em;
}

/* Card list styling */
.card ul {
    list-style: none;
}

/* Sold Products section styling */
.sold-products {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 1.5em;
    width: 100%;
    max-width: 1000px;
    margin: 2em 0;
}

.sold-products ul {
    list-style: none;
    padding: 0;
}

.sold-products li {
    margin-bottom: 0.5em;
}


       
    </style>
</head>
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Change Credentials</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                <form method="POST" action="{{ route('updateuser') }}" >
                        @csrf
                        <input type="hidden" id="userId" value="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Name</label>
                            <x-text-input class="form-control"  id="Username"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <x-text-input class="form-control"  id="Email"  type="email" name="email" :value="old('email')" required autocomplete="username" />

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <x-text-input class="form-control"  id="User_password" 
                            type="text"
                            name="password"
                            required autocomplete="new-password" />                        </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confrim Password</label>
                            <x-text-input class="form-control"  id="password_confirmation" 
                            type="text"
                            name="password_confirmation" required autocomplete="new-password" />                        </div>

                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Change Unique Password</label>
                            <x-text-input class="form-control"  id="unique" 
                            type="text"
                            name="uniquep"
                            required autocomplete="new-password" />                        </div>
                        

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unique Password</label>
                            <x-text-input class="form-control"  id="User_unique_password" 
                            type="password"
                            name="unique" required placeholder="Enter current unique password to update user"  />                        </div>
                      


                             

                            <button class="btn btn-primary" type="submit">Change</button>
                    </form>
                </div>


            </div>

        </div>
    </div>
</div>  
<div class="app-content content">

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div class="content-body">
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
        <button class="btn btn-primary change" data-bs-toggle="modal" 
        data-bs-whatever="@mdo">Change Credentials</button>
           <br>
           <br>


           
</div>
           
            <!-- info and time tracking chart -->
            <div class="row minimal-modern-charts">

            <div class="container">
          
    <main>
        <!-- Date Range Filter Form -->
        <section class="filter-form">
            <form action="{{ route('dashboard.salesReport') }}" method="GET">
                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start_date" >
                
                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end_date">
                
                <button type="submit">Get Report</button>
            </form>
        </section>

        <!-- Dashboard Cards -->
        <section class="cards-container">
            
            <section class="card">
                <h2>Weekly Sales</h2>
                <p>Rs.{{ number_format($weeklyData->weekly_sales, 2) }}</p>
            </section>
            <section class="card">
                <h2>Weekly Profit</h2>
                <p>Rs.{{ number_format($weeklyData->weekly_profit, 2) }}</p>
            </section>
            <section class="card">
                <h2>Monthly Sales</h2>
                <p>Rs.{{ number_format($monthlyData->monthly_sales, 2) }}</p>
            </section>
            <section class="card">
                <h2>Monthly Profit</h2>
                <p>Rs.{{ number_format($monthlyData->monthly_profit, 2) }}</p>
            </section>
        </section>

        <!-- Sold Products Section -->
        
        </main>
        </div>
    </div>
            </div>
        </div>
    </div>

</div>



</div>
</div>

</div>
<script>
     $(document).on('click', '.change', function (e) {
    e.preventDefault();

    // Get the authenticated user's ID
    var userId = "{{ Auth::id() }}"; // Assuming you're using Blade syntax to get the user ID

    $('#exampleModal5').modal('show');
    $.ajax({
        type: "GET",
        url: "/edit2/" + userId, // Pass the user ID in the URL
        success: function (response) {
            if (response.status == 404) {
                $('#success_message').html("");
                $('#success_message').addClass('alert alert-danger');
                $('#success_message').text(response.message);
            } else {
                $('#Userid').val(response.User.id);
                $('#Username').val(response.User.name);
                $('#Email').val(response.User.email);
                $('#User_password').val(response.User.Text_Password);
                console.log(response); // Check the entire response object
                console.log(response.User); // Check the User object
                console.log(response.User.email);
            }
        }
    });
     });
</script>
@endsection