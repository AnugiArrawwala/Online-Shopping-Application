<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search product</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .body {
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    <img class="logo" src="/assets/images/project-logo4.png" alt="AZ-EE's" width="150px" height="150px">
    <div class="NaviBar">
        <button class="List"><a href="home.html" class="List">HOME</a></button>
        <div class="dropdown">
            <button class="List"><a href="womens.html" class="List">WOMEN'S</a>
                <div class="dropdown-content">
                    <a href="#">Shop All</a>
                    <a href="#">Tops</a>
                    <a href="#">Jeans</a>
                </div>
            </button>
        </div>
        <div class="dropdown">
            <button class="List"><a href="mens.html" class="List">MEN'S</a>
                <div class="dropdown-content">
                    <a href="#">Shop All</a>
                    <a href="#">Shirts</a>
                    <a href="#">Trousers</a>
                </div>
            </button>
        </div>
        <button class="List"><a href="latest.html" class="List">SHOP LATEST</a></button>
        <button class="List"><a href="giftcards.html" class="List">GIFT CARDS</a></button>
        <button class="List"><a href="accessories.html" class="List">ACCESSORIES</a></button>
        <div class="dropdown">
            <button class="List"><img src="/assets/images/profile/user.png" alt="">
                <div class="dropdown-content">
                    <a href="#">LOGIN</a>
                    <a href="#">SIGN UP</a>

                </div>
            </button>
        </div>
        <input class="SearchBar" type="text" placeholder=" Search" name="search">

        <br />
    </div>
    <input class="SearchBar2" id="search_product" type="text" placeholder="Search Bar" name="Search Bar">
    <div class="container">
        <div class="filter-bar">
            <form>
                <div class="filter-group">
                    <label>Availability:</label>
                    <div>
                        <input type="checkbox" id="availability-all">
                        <label for="availability-all">All</label>
                    </div>
                    <div>
                        <input type="checkbox" id="availability-available">
                        <label for="availability-available">Available</label>
                    </div>
                    <div>
                        <input type="checkbox" id="availability-out-of-stock">
                        <label for="availability-out-of-stock">Out of Stock</label>
                    </div>
                </div>

                <div class="filter-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price-min" placeholder="Min" min="0" step="any">
                    <input type="number" id="price-max" placeholder="Max" min="0" step="any">
                </div>

                <div class="filter-group">
                    <label for="size">Size:</label>
                    <div>
                        <input type="checkbox" id="size-small">
                        <label for="size-small">Small</label>
                    </div>
                    <div>
                        <input type="checkbox" id="size-medium">
                        <label for="size-medium">Medium</label>
                    </div>
                    <div>
                        <input type="checkbox" id="size-large">
                        <label for="size-large">Large</label>
                    </div>
                    <button style="margin-top: 20px;"> Apply</button>
                </div>
            </form>
        </div>
        <div class="product" id="product-list">

        </div>
    </div>
    <div class="last">
        <!-- Creating the area to print items added to cart -->
        <div class="cont3">
            <p><b>Shopping Cart</b></p>
        </div>

        <div class="cont1" style="padding: 25px;">
            <table>
                <thead>
                    <tr>
                        <th style="width:350px;">Item</th>
                        <th style="width:125px;">Quantity</th>
                        <th style="width:100px;">Unit Price</th>
                        <th style="width:100px;">Total</th>
                    </tr>
                </thead>
                <tbody id="user-card-details">
                </tbody>
                <tfoot id="user-card-details-summary">

                </tfoot>
            </table>
        </div>

         <!-- todo remove  -->
        <div class="cont-order-place" id="temp-order-place-container"></div>
        
        <!-- asking using to enter name and email -->
        <div class="cont2">
            <form style="padding-top:15px;">
                <label for="name"><b> Name:</b></label>
                <input type="text" name="name" id="name" size="20" maxlength="20" required placeholder="  Enter your name">
                <label for="useremail"><b>Email:</b></label>
                <input type="email" name="useremail" id="useremail" required placeholder="  Enter your email"><br><br>
                <button type="button" onclick="openForm()">Go To Checkout</button> <!-- opens the checkout form when clicked -->
                <button onclick="clearCart()">Clear Cart</button>
                <!-- clears the cart by refreshing the page (https://www.freecodecamp.org/news/refresh-the-page-in-javascript-js-reload-window-tutorial/) -->
            </form>
        </div>
        <!-- pop up checkout form -->
        <div id="popupForm" class="formPopup" style="overflow-y: scroll;">
            <form>
                <p>* Indicates a required field</p>
                <div class="cont5">
                    <h4>ORDER SUMMARY</h4><br>
                    <div style="display: inline-block;">Total =&nbsp; <p style="display: inline-block;" id="checkoutTotal"></p>
                    </div>
                </div>
                <div class="cont5">
                    <h4>PAYMENT DETAILS</h4><br>
                    <label for="card">* Card Number:</label>
                    <input type="password" name="card" id="card" required><br><br>
                    <div style="display: inline-block;">* Cardholder's Name:&nbsp; <p style="display: inline-block;" id="cardHolderName"></p>
                    </div><br><br>
                    <label for="expiryDate">* Expiry Date:</label>
                    <input type="date" name="expiryDate" id="expiryDate" required><br><br>
                </div>
                <div class="cont5">
                    <h4>ADDRESS DETAILS</h4><br>
                    <div style="display: inline-block;">* Address:&nbsp;
                        <p style="display: inline-block;" id="editAddress"></p>
                        <p style="display: inline-block;" id="editCode"></p>
                        <p style="display: inline-block;" id="editCountry"></p>
                    </div><br>
                    &nbsp;<button type="button" onclick="openEditForm()">Edit</button>
                </div>
                <div class="cont5">
                    <h4>CONTACT DETAILS</h4><br>
                    <label for="number">* Phone number:</label>
                    <input type="text" name="number" id="number" size="20" maxlength="20" required><br><br>
                    <div style="display: inline-block;">* Email:&nbsp; <p style="display: inline-block;" id="email"></p>
                    </div>
                </div>
                <button>Make Payment</button>
                <button type="button" onclick="closeForm()">Close</button>
            </form>
        </div>
        <form id="edit" class="formPopup">
            <label for="address">* Address:</label>
            <textarea cols="5" rows="1" id="address"></textarea><br><br>
            <label for="code">* Postcode/ZIP code:</label>
            <input type="text" name="code" id="code" size="20" maxlength="20"><br><br>
            <label for="country">* Country: </label>
            <input type="text" name="country" id="country" size="20" maxlength="20"><br><br>
            <button type="button" onclick="closeEditForm()">Cancel</button>
            <button type="button" onclick="confirmChanges()">Confirm Changes</button>
        </form>



    </div>
    <script src="/assets/js/cw.js"></script>
</body>

</html>