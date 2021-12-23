$(document).ready(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.razor_pay_btn').click(function (e) {
        e.preventDefault();

        var data = {
            '_token': $('input[name=_token]').val(),
            'firstname': $('input[name=firstname]').val(),
            'lastname': $('input[name=lastname]').val(),
            'mobile': $('input[name=mobile]').val(),
            'county': $('input[name=county]').val(),
            'city': $('input[name=city]').val(),
            'address': $('input[name=address]').val(),

        }

        $.ajax({
            type: "POST",
            url: 'confirm-razorpay-payment',
            data: data,
            success: function (response) {
                if (response.status_code == 'no_data_in_cart')
                {
                    window.location.href = "/cart";
                }
                else
                {
                   //console.log(response.total_price);
                    //"amount": (response.total_price * 100),


                    var options = {
                        "key": "rzp_test_PBJNKU5Re0r2kU", // Enter the Key ID generated from the Dashboard
                        "amount": (1 * 100), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        //"currency": "Ksh",
                        "name": "NewGreen",
                        "description": "Thank you for purchasing",
                        "image": "/asset2/images/logoNewgreen.png",
                        //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "handler": function (razorpay_response){
                            //alert(razorpay_response.razorpay_payment_id);
                            $.ajax({
                                type:"POST",
                                url: '/place-order',
                                data: {
                                    '_token': $('input[name=token]').val(),
                                    'razorpay_payment_id' : razorpay_response.razorpay_payment_id,
                                    'firstname' : response.firstname,
                                    'lastname': response.lastname,
                                    'mobile': response.mobile,
                                    'county': response.county,
                                    'city': response.city,
                                    'address' : response.address,
                                    'place_order_razorpay': true,
                                },
                                success:function (msgsasa) {
                                    window.location.href = '/thank-you';
                                }
                            })
                        },
                        "prefill": {
                            "name": response.firstname + response.lastname,
                            "email": response.email,
                            "contact": response.mobile
                        },


                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    var rzp1 = new Razorpay(options);

                        rzp1.open();
                        e.preventDefault();
                    }

                }
            });
        });
    });

