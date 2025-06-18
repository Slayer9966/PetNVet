@extends('nav')
@section('content')
<head>

</head>

<!-- end full description div -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Services</h6>
            <h1 class="display-5 text-uppercase mb-0">See Your Pet's Vaccination History</h1>
        </div>
        <div class="row g-5">
           
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control p-3" placeholder="Your Unique Id" id="uniqueIdInput">
            <button class="btn btn-primary" id="searchButton">Search</button>
        </div>
        <div id="messageContainer" class="mt-2"></div>
        <div id="petsContainer" class="row mt-4"></div>
    </div>
</div>



<script>

async function fetchPetsByUniqueId(uniqueId) {
    try {
        const response = await fetch(`/getPetsByUniqueId/${uniqueId}`);
        if (!response.ok) {
            const error = await response.json();
            displayMessage(error.error, 'error');
            return;
        }
        const data = await response.json();
        console.log('Fetched pets and history:', data);
        displayPetsWithHistory(data); // Display pets and their history
    } catch (error) {
        console.error('Error fetching pets:', error);
        displayMessage('Error fetching pets', 'error');
    }
}

function displayMessage(message, type) {
    const messageContainer = document.getElementById('messageContainer');
    messageContainer.textContent = message;
    messageContainer.className = type === 'error' ? 'text-danger' : 'text-success';
}

function displayPetsWithHistory(pets) {
    const petsContainer = document.getElementById('petsContainer');
    petsContainer.innerHTML = ''; // Clear previous results

    if (pets.length === 0) {
        petsContainer.textContent = 'No pets found for the given Unique ID.';
        return;
    }

    pets.forEach(pet => {
        const petCard = document.createElement('div');
        petCard.className = 'col-md-4 col-sm-6 mb-3'; // Responsive columns
        petCard.innerHTML = `
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">${pet.PetName}</h5>
                    <p class="card-text"><strong>Species:</strong> ${pet.Species}</p>
                    <p class="card-text"><strong>Vaccination History:</strong></p>
                    <ul class="list-group list-group-flush">
                        ${pet.vaccination_history.map(history => `
                            <li class="list-group-item">
                                <strong>Vaccine:</strong> ${history.Vaccine} <br>
                                <strong>Date:</strong> ${new Date(history.created_at).toLocaleDateString()}
                            </li>
                        `).join('')}
                    </ul>
                </div>
            </div>
        `;
        petsContainer.appendChild(petCard);
    });
}

// Bind the search button click event
document.getElementById('searchButton').addEventListener('click', () => {
    const uniqueId = document.getElementById('uniqueIdInput').value.trim();
    if (uniqueId.length === 4) {
        fetchPetsByUniqueId(uniqueId);
    } else {
        displayMessage('Unique ID must be exactly 4 digits', 'error');
    }
});



</script>
@endsection