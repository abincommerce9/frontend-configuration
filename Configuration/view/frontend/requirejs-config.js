var config = {
    map: {
        '*': {
            'Magento_Checkout/template/payment.html':
                'Atoon_Configuration/template/payment.html'
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/payment': {
                'Atoon_Configuration/js/view/payment-mixin': true
            }
        }
    }
};
