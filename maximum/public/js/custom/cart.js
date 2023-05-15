
var quantityInput= document.getElementById('quantity');
var updateCartForm = document.getElementById('updateCart');

quantityInput.addEventListener('change', function() {
    updateCartForm.submit();
})
