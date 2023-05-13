console.log(window.myJSValue);
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: window.myJSValue
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.href = "../payment/sucess.html";
        })
    },
    onCancel: function (data) {
        window.location.href = "../payment/oncancel.html";
    }
}).render('#paypal-payment-button');