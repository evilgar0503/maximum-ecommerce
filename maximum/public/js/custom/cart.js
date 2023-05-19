
var quantityInputs = document.querySelectorAll('.quantity-input');

quantityInputs.forEach(function(quantityInput) {
    quantityInput.addEventListener('change', function() {
        var updateCartForm = document.getElementById('updateCart'+quantityInput.id);
        updateCartForm.submit();
    })
})

var shippingMethod = document.getElementById('shippingMethod');
console.log(shippingMethod.value)
