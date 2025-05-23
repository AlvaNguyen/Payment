<script>
    function calculateTotalUSD() {
      const vnd = <?= json_encode($final_total) ?>;
      const usd = (vnd / 24000).toFixed(2);
      return usd;
    }

    paypal.Buttons({
      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: calculateTotalUSD()
            }
          }]
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          alert('Thanh toán thành công cho ' + details.payer.name.given_name);
          console.log(details);
        });
      }
    }).render('#paypal-button-container');
  </script>