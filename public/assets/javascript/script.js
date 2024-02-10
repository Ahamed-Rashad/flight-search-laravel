function toggleTripType(tripType) {
    var returnDateInput = document.getElementById('input_to');

    if (tripType === 'roundTrip') {
        // Enable the return date input
        returnDateInput.disabled = false;
        // Set text color to the default color
        returnDateInput.style.color = ''; // or returnDateInput.style.color = 'initial';
    } else if (tripType === 'oneWay') {
        // Disable the return date input
        returnDateInput.disabled = true;
        // Set text color to black
        returnDateInput.style.color = 'black';
    }
}

function swapOriginDestination() {
    // var originLabel = document.querySelector('label[for="origin"]');
    // var destinationLabel = document.querySelector('label[for="destination"]');

    var originInput = document.getElementById('origin');
    var destinationInput = document.getElementById('destination');

    // Check if elements exist
    if (originInput && destinationInput) {
        // Swap labels
        // var tempLabel = originLabel.textContent;
        // originLabel.textContent = destinationLabel.textContent;
        // destinationLabel.textContent = tempLabel;

        // Swap input values
        var tempValue = originInput.value;
        originInput.value = destinationInput.value;
        destinationInput.value = tempValue;

        // Swap placeholder values
        var tempPlaceholder = originInput.placeholder;
        originInput.placeholder = destinationInput.placeholder;
        destinationInput.placeholder = tempPlaceholder;
    } else {
        console.error("Elements not found. Make sure the labels and inputs have the correct 'for' and 'id' attributes.");
    }
}

// function toggleReturnDate() {
//     const returnDateContainer = document.getElementById("returnDateContainer");
//     const returnDateInput = document.getElementById("returnDate");
//     const originInput = document.getElementById("origin");
//     const destinationInput = document.getElementById("destination");
//     const oneWayButton = document.querySelector('[data-bs-target="#nav-profile"]');

//     if (oneWayButton.classList.contains("active")) {
//         returnDateContainer.style.display = "none";
//         returnDateInput.required = false;

//         originInput.classList.remove("col");
//         destinationInput.classList.remove("col");
//     } else {
//         returnDateContainer.style.display = "block";
//         returnDateInput.required = true;

//         originInput.classList.add("col");
//         destinationInput.classList.add("col");
//     }
// }

function updateAdults(change) {
    const adultsInput = document.getElementById("adults");
    let currentValue = parseInt(adultsInput.value, 10);
    currentValue += change;

    if (currentValue < 0) {
        currentValue = 0;
    }

    adultsInput.value = currentValue;
    document.getElementById("adultsCount").textContent = currentValue;
}

function updateChildrens(change) {
    const childrenInput = document.getElementById("children");
    let currentValue = parseInt(childrenInput.value, 10);
    currentValue += change;

    if (currentValue < 0) {
        currentValue = 0;
    }

    childrenInput.value = currentValue;
    document.getElementById("childrenCount").textContent = currentValue;
}

function updateInfant(change) {
    const infantInput = document.getElementById("infant");
    let currentValue = parseInt(infantInput.value, 10);
    currentValue += change;

    if (currentValue < 0) {
        currentValue = 0;
    }

    infantInput.value = currentValue;
    document.getElementById("infantCount").textContent = currentValue;
}

function resetCount() {
    // Assuming you have input fields with IDs 'adults', 'children', and 'infant'
    document.getElementById("adults").value = 0;
    document.getElementById("children").value = 0;
    document.getElementById("infant").value = 0;

    // Assuming you have span elements with IDs 'adultsCount', 'childrenCount', and 'infantCount'
    document.getElementById("adultsCount").textContent = 0;
    document.getElementById("childrenCount").textContent = 0;
    document.getElementById("infantCount").textContent = 0;
}

function saveChanges() {
    $("#totalTravelersDisplay").modal("hide");
    // $("body").removeClass("modal-open");
    $(".modal-backdrop").remove();
}
