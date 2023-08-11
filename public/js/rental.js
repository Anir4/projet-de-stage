
var collectedInputs = {};


// Function to show the next step
function nextStep(nextStepNum) {
    var currentStepNum = nextStepNum - 1;
    var currentStep = document.getElementById("step" + currentStepNum);
    var nextStep = document.getElementById("step" + nextStepNum);

    var isValid = validateStep(currentStepNum);

    if (isValid) {
        collectStepInputs(currentStepNum);
        currentStep.style.display = "none";
        nextStep.style.display = "flex";
        if (nextStepNum == 4) {
            show();
        }

    }
}

// Function to validate user inputs for a specific step
function validateStep(stepNum) {
    var stepIsValid = false;
    var step = document.getElementById("step" + stepNum);

    if (stepNum === 1) {
        stepIsValid = true;
    } else if (stepNum === 2) {
        var selectedOffer = document.querySelector('input[name="offer"]:checked');
        if (selectedOffer) {
            stepIsValid = true;
        }
    } else if (stepNum === 3) {
        var delivery = document.querySelector('input[name="delivery"]:checked');
        var Address = document.getElementById("Address");
        if (delivery) {
            if (Address.value !== "") {
                stepIsValid = true;
            }
        } else {
            stepIsValid = true;
        }
    }

    if (!stepIsValid) {
        alert("Please complete all fields.");
    }

    return stepIsValid;
}

var collectedInputs = {};

function collectStepInputs(stepNum) {
    var step = document.getElementById("step" + stepNum);

    var stepInputs = {};

    if (stepNum === 1) {
        stepInputs.city = document.getElementById("city").value;
        stepInputs.biketype = document.querySelector('input[name="type"]:checked').value;

    } else if (stepNum === 2) {
        var selectedOffer = document.querySelector('input[name="offer"]:checked');
        var quantity = document.getElementById('quantity_' + selectedOffer.value);
        if (selectedOffer) {
            stepInputs.selectedOffer = selectedOffer.value;
            stepInputs.quantity = quantity.value;

            var titleElement = document.getElementById('title_' + selectedOffer.value);
            if (titleElement) {
                stepInputs.title = titleElement.getAttribute('data-title');
            }

            stepInputs.price = document.getElementById('price_' + selectedOffer.value).getAttribute('data-price');


            var durationElement = document.getElementById('duration_' + selectedOffer.value);
            if (durationElement) {
                stepInputs.duration = durationElement.getAttribute('data-duration');
                stepInputs.rentduration=stepInputs['duration'] * stepInputs['quantity'];
            }

            var kmElement = document.getElementById('km_' + selectedOffer.value);
            if (kmElement) {
                stepInputs.km = kmElement.getAttribute('data-km');
            }

            var d1Element = document.getElementById('d1_' + selectedOffer.value);
            if (d1Element) {
                stepInputs.d1 = d1Element.getAttribute('data-d1');
            }

            var d2Element = document.getElementById('d2_' + selectedOffer.value);
            if (d2Element) {
                stepInputs.d2 = d2Element.getAttribute('data-d2');
            }

            var d3Element = document.getElementById('d3_' + selectedOffer.value);
            if (d3Element) {
                stepInputs.d3 = d3Element.getAttribute('data-d3');
            }

        }
    } else if (stepNum === 3) {
        var delivery = document.querySelector('input[name="delivery"]:checked');
        if (delivery) {
            stepInputs.Address = document.getElementById("Address").value;
        }
        stepInputs.bikenbr = document.getElementById("bikenbr").value;
        stepInputs.rentDate = document.getElementById("rentDate").value;
        stepInputs.total = stepInputs.bikenbr * collectedInputs[2].price * collectedInputs[2].quantity;


    }
    collectedInputs[stepNum] = stepInputs;
  //  console.log("Collected Inputs for Step " + stepNum + ":", stepInputs);

}


function show() {
    var step4Content = document.getElementById("step4-content");

    // Clear any existing content
    step4Content.innerHTML = "";


    var stepInputs = collectedInputs[2];

    var offerInfo = document.createElement("div");
    offerInfo.classList.add("description0");//OFFER INFOS IN CLASS description0


    var price = document.createElement("label");
    price.classList.add("pric");
    price.innerHTML = '<h3 style="text-align: center;" >' + stepInputs['price'] + ' DH / Moto</h3>';
    offerInfo.appendChild(price);

    var description = document.createElement("div");
    description.classList.add("description");

    var duration = document.createElement("div");
    duration.classList.add("details");
    duration.innerHTML = '<img src="./public//images/check2.png" width="30px"> <span>' + stepInputs['rentduration'] + ' Jours</span>';
    description.appendChild(duration);

    for (var key in stepInputs) {
        if (key === 'km' || key === 'd1' || key === 'd2' || key === 'd3') {
            var entry = document.createElement("div");
            entry.classList.add("details");
            entry.innerHTML = '<img src="./public//images/check2.png" width="30px"> <span>' + stepInputs[key] + '</span>';

            description.appendChild(entry);
        }
    }

    var total = document.createElement("div");
    total.classList.add("total");
    total.innerHTML = '<label>Order Total:</label>';
    var totalnbr =document.createElement("div");
    totalnbr.classList.add("nbr");
    totalnbr.innerHTML='<div>' + collectedInputs[3].total + ' DH</div>';
    total.appendChild(totalnbr);

    offerInfo.appendChild(description);
    step4Content.appendChild(offerInfo);
    step4Content.appendChild(total);


}


// Function to show the previous step
function prevStep(prevStepNum) {
    var currentStepNum = prevStepNum + 1;
    var currentStep = document.getElementById("step" + currentStepNum);
    var prevStep = document.getElementById("step" + prevStepNum);

    currentStep.style.display = "none";
    prevStep.style.display = "flex";
}

// Function to handle the final confirmation and submit the form
    function confirmation(){
    // Get the collected step inputs
    var collectedData = collectedInputs;

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Set up the request
    var url = "submit_order.php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // Convert the collected data to JSON format
    var jsonData = JSON.stringify(collectedData);

    // Send the JSON data
    xhr.send(jsonData);

    // Handle the response (optional)
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Handle success response
                var response = JSON.parse(xhr.responseText);
                alert(response.message);
                window.location.reload();
            } else {
                // Handle error response
                alert("An error occurred. Please try again later.");
            }
        }
    };
}