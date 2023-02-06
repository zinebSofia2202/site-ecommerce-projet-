
 
 function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
   
}

function updateCartTotal() {
    
    var total =0
        var priceElement = document.getElementsByClassName('product_price')[0]
        var quantityElement = document.getElementsByClassName('qty_input')[0]
        var price = parseInt(priceElement.innerHtml)
        var quantity = quantityElement.value
     price = (price * quantity)
    
    
    
}
document.getElementsByClassName('deal-price')[0].innerHtml =  price
