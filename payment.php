<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission

    // Check which payment option was selected
    if (isset($_POST['paymentOption'])) {
        $paymentOption = $_POST['paymentOption'];

        if ($paymentOption === 'creditCard') {
            // Credit card payment option was selected

            // Get the credit card details from the form
            $cardNumber = $_POST['cardNumber'];
            $cardHolderName = $_POST['cardHolderName'];
            $expiryDate = $_POST['expiryDate'];
            $cvv = $_POST['cvv'];

            // Process the credit card payment
            // Add your logic here for processing credit card payments

            // Redirect or display success message
            header('Location: payment_success.php');
            exit;
        } elseif ($paymentOption === 'bankDeposit') {
            // Bank deposit payment option was selected

            // Process the bank deposit payment
            // Add your logic here for processing bank deposit payments

            // Redirect or display success message
            header('Location: payment_success.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Gateway</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="left">
                <h3>PAYMENT METHOD</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <br>
                    <div id="paymentOptions">
                        <input type="radio" name="paymentOption" id="creditCardOption" value="creditCard" onclick="handlePaymentOption('creditCard')">
                        <label for="creditCardOption">Credit Card</label>

                        <input type="radio" name="paymentOption" id="bankDepositOption" value="bankDeposit" onclick="handlePaymentOption('bankDeposit')">
                        <label for="bankDepositOption">Bank Deposit</label>
                    </div>


                    <br>

                    <div id="savedCardsSection" style="display: none;">
                        <h3>Saved Cards</h3>
                        <br>
                        <ul id="cardList"></ul>
                    </div>


                    <div id="bankDepositDetails" style="display: none;">
                        <h3>Bank Deposit Details</h3><br>

                        <p>Account No: 801026423 </p>
                        <p>Bank : Sampath Bank</p>
                        <p>Branch : Kandy Super </p><br><br>

                    </div>

                    <div id="bankDepositDection" style="display:none;">
                        <input type="submit" value="Proceed to Checkout" onclick="payNow()">

                    </div>
                </form>

            </div>

            <div class="right">
                <div id="creditCardSection">
                    <h3>CARD PAYMENT</h3>


                    <form method="post" action="paymentProcess.php">
                        Accepted Card <br>
                        <img src="image/card1.png" width="100">
                        <img src="image/card2.png" width="50">
                        <br><br>
                        
                        Credit card number
                        <input type="text" name="cardNumber" id="cardNumber" class="textFeild" placeholder="Enter card number">

                        Card Holder Name
                        <input type="text" name="cardHolderName" id="cardHolderName" class="textFeild" placeholder="Enter card number">

                        Exp Date
                        <input type="text" name="expiryDate" id="expiryDate" class="textFeild" placeholder="Expiry Date (e.g. MM/YY)">

                        CVV
                        <input type="text" name="cvv" id="cvv" class="textFeild" placeholder="CVV">

                        <input type="submit" name="submit" value="Checkout">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <script src="script.js"></script>
</body>

</html>