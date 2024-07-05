var creditCards = []; // Array to store added credit cards

function toggleCardList(enabled) {
  var creditCardSection = document.getElementById("creditCardSection");
  creditCardSection.style.display = enabled ? "block" : "none";

  var bankDepositSection = document.getElementById("bankDepositSection");
  bankDepositSection.style.display = enabled ? "none" : "block";
}

// Function to handle the payment option selection
// Function to handle the payment option selection
function handlePaymentOption(option) {
    var savedCardsSection = document.getElementById('savedCardsSection');
    var bankDepositDetails = document.getElementById('bankDepositDetails');
  
    if (option === 'creditCard') {
      savedCardsSection.style.display = 'block';
      bankDepositDetails.style.display = 'none';
      updateSavedCardsList();
    } else if (option === 'bankDeposit') {
      savedCardsSection.style.display = 'none';
      bankDepositDetails.style.display = 'block';
    }
  }
  

function addCard() {
  var cardNumber = document.getElementById("cardNumber").value;
  var cardHolderName = document.getElementById("cardHolderName").value;
  var expiryDate = document.getElementById("expiryDate").value;
  var cvv = document.getElementById("cvv").value;

  if (cardNumber === '' || cardHolderName === '' || expiryDate === '' || cvv === '') {
    alert('Please enter all the required card details.');
    return;
  }

  // Create a card object
  var card = {
    cardNumber: cardNumber,
    cardHolderName: cardHolderName,
    expiryDate: expiryDate,
    cvv: cvv
  };

  // Add the card object to the creditCards array
  creditCards.push(card);

  // Clear the input fields
  document.getElementById("cardNumber").value = "";
  document.getElementById("cardHolderName").value = "";
  document.getElementById("expiryDate").value = "";
  document.getElementById("cvv").value = "";

  // Update the card list display
  var cardList = document.getElementById("cardList");
  var listItem = document.createElement("li");
  var cardInfo = document.createTextNode(card.cardNumber);
  listItem.appendChild(cardInfo);

  // Add a clickable text to edit/remove the card
  var editLink = document.createElement("span");
  editLink.className = "editLink";
  editLink.appendChild(document.createTextNode(" Edit"));
  editLink.addEventListener("click", function() {
    editCard(card);
  });
  listItem.appendChild(editLink);

  var removeLink = document.createElement("span");
  removeLink.className = "removeLink";
  removeLink.appendChild(document.createTextNode(" Remove"));
  removeLink.addEventListener("click", function() {
    removeCard(card);
  });
  listItem.appendChild(removeLink);

  cardList.appendChild(listItem);

  console.log("Card added successfully!");
}

function editCard(card) {
  // Pre-fill the credit card details in the form for editing
  document.getElementById("cardNumber").value = card.cardNumber;
  document.getElementById("cardHolderName").value = card.cardHolderName;
  document.getElementById("expiryDate").value = card.expiryDate;
  document.getElementById("cvv").value = card.cvv;

  // Remove the card from the array
  var index = creditCards.indexOf(card);
  if (index > -1) {
    creditCards.splice(index, 1);
  }

  // Remove the card from the list
  var cardList = document.getElementById("cardList");
  cardList.innerHTML = "";

  // Re-populate the card list with the remaining cards
  creditCards.forEach(function(card) {
    var listItem = document.createElement("li");
    var cardInfo = document.createTextNode(card.cardNumber);
    listItem.appendChild(cardInfo);

    var editLink = document.createElement("span");
    editLink.className = "editLink";
    editLink.appendChild(document.createTextNode(" Edit"));
    editLink.addEventListener("click", function() {
      editCard(card);
    });
    listItem.appendChild(editLink);

    var removeLink = document.createElement("span");
    removeLink.className = "removeLink";
    removeLink.appendChild(document.createTextNode(" Remove"));
    removeLink.addEventListener("click", function() {
      removeCard(card);
    });
    listItem.appendChild(removeLink);

    cardList.appendChild(listItem);
  });

  console.log("Card removed from list for editing!");
}

function removeCard(card) {
  // Remove the card from the array
  var index = creditCards.indexOf(card);
  if (index > -1) {
    creditCards.splice(index, 1);
  }

  // Remove the card from the list
  var cardList = document.getElementById("cardList");
  cardList.innerHTML = "";

  // Re-populate the card list with the remaining cards
  creditCards.forEach(function(card) {
    var listItem = document.createElement("li");
    var cardInfo = document.createTextNode(card.cardNumber);
    listItem.appendChild(cardInfo);

    var editLink = document.createElement("span");
    editLink.className = "editLink";
    editLink.appendChild(document.createTextNode(" Edit"));
    editLink.addEventListener("click", function() {
      editCard(card);
    });
    listItem.appendChild(editLink);

    var removeLink = document.createElement("span");
    removeLink.className = "removeLink";
    removeLink.appendChild(document.createTextNode(" Remove"));
    removeLink.addEventListener("click", function() {
      removeCard(card);
    });
    listItem.appendChild(removeLink);

    cardList.appendChild(listItem);
  });

  console.log("Card removed successfully!");
}

function otp() {
  var selectedPaymentMethod = document.querySelector('input[name="paymentOption"]:checked').id;

  if (selectedPaymentMethod === "creditCardOption") {
    if (creditCards.length === 0) {
      alert("No credit cards added!");
      return;
    }

    // Open OTP input window for credit card payment
    var otp = prompt("Please enter the OTP:");

    if (otp) {
      // Show success message after OTP confirmation
      window.location.href = "popup.html";

      console.log("Payment processed successfully!");
    }
  }
}
  

function payNow() {
    var selectedPaymentMethod = document.querySelector('input[name="paymentOption"]:checked').id;

   if (selectedPaymentMethod === "bankDepositOption") {
    // Show bank account details for bank deposit
    var bankDepositSection = document.getElementById("bankDepositDetails");
    bankDepositDetails.style.display = "block";

    // Process the bank deposit payment
    var confirmPayment = confirm("We will inform you about the payment status after checking. Do you want to proceed?");

    if (confirmPayment) {
      // Show success message after payment confirmation
      window.location.href = "popup.html";

      console.log("Payment processed successfully!");
    } else {
      console.log("Payment canceled.");
    }
  }
}



  