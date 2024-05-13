function openPopup() {
    // define el ancho y alto de la ventana emergente
    var width = 400;
    var height = 500;
  
    // calcula la posición central de la pantalla
    var left = screen.width / 2 - width / 2;
    var top = screen.height / 2 - height / 2;
  
    // abre la ventana emergente
    var popup = window.open("", "popup", "location=0,width=" + width + ",height=" + height + ",left=" + left + ",top=" + top);
  
    // Carga el script de Stripe.js en la ventana emergente
    popup.document.write("<script src='https://js.stripe.com/v3/'></script>");
  
    // Define el formulario de pago con tarjeta dentro de la ventana emergente
    popup.document.write(`
      <h1>Introduce los datos de tu tarjeta</h1>
      <div id="card-element"></div>
      <button id="checkout">Pagar</button>
    `);
  
    // Crea el objeto Stripe e inicializa el formulario de pago
      var stripe = Stripe('tu_clave_publica_de_stripe');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');
  
    // Envía el formulario cuando se hace clic en el botón de pagar
    var checkoutButton = popup.document.getElementById('checkout');
    checkoutButton.addEventListener('click', function(event) {
      event.preventDefault();
      stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
          // muestra un mensaje de error si hay algún problema con los datos de la tarjeta
          alert(result.error.message);
        } else {
          // envía el token de pago a tu servidor para procesar el pago
          var token = result.token.id;
          // aquí debes incluir tu código para enviar el token a tu servidor y procesar el pago
          popup.close();
        }
      });
    });
  }
  