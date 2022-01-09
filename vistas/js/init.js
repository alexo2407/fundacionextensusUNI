// Replace with your own publishable key: https://dashboard.stripe.com/test/apikeys
var PUBLISHABLE_KEY = "pk_live_51JoU4DJiQci0RwPjHlmHEnqAzvivvFzhiAC8HA5ZTt6BeyYzrVSqy5dY0Sz9ERboh3k05YSyodqwuYSTPi7uhow800BTx6ueAO";

// Replace with the domain you want your users to be redirected back to after payment
var DOMAIN = window.location.origin;
// Replace with a Price for your own product (created either in the Stripe Dashboard or with the API)
// You can also supply a SKU or Plan ID for 
var PRICE_ID = "prod_KvhyKstTNRBpIF";

var quantity = 1;

var stripe = Stripe(PUBLISHABLE_KEY);

var basicStripeButton = document.getElementById("basic-stripe-button");

// Handle any errors from Checkout
var handleResult = function(result) {
    if (result.error) {
        var displayError = document.getElementById("error-message");
        displayError.textContent = result.error.message;
    }
};

function paystripe() {
    if (document.getElementById("input-stripe-quantity").checkValidity()) {
        quantity = Number(document.getElementById("input-stripe-quantity").value) * 100;
        stripe.redirectToCheckout({
                mode: 'payment',
                lineItems: [{
                    price: PRICE_ID,
                    quantity: quantity
                }],
                //successUrl:DOMAIN + "/stripe-checkout-result","/{CHECKOUT_SESSION_ID}"
                successUrl: DOMAIN + "/pagos?success",
                cancelUrl: DOMAIN + "/pagos?canceled"
            })
            .then(handleResult);
    } else {
        document.getElementById("payresult").style.display = "block";
        setTimeout(function() {
            document.getElementById("payresult").style.display = "none";
        }, 5000);
    }
}