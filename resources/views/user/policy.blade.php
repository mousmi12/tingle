<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
    <style>
        .table th,
        .table td {
            background-color: transparent;
            /* Ensure table cells don't override the container background */
        }
    </style>
</head>

<body>
    @include('user.navigation')
    <div class="container rounded-5 imagShadow my-5 bgcolorCom">
        <section>
            <div class="justify-content-center align-items-center py-5">
            Shipping Policy:
Thank you for shopping at Tingle! We're delighted to bring our handmade yarn and resin products to your doorstep. Please take a moment to review our shipping policy:

Processing Time: All orders are processed within 7 business days. Orders are not shipped or delivered on weekends or holidays.

Shipping Rates: Shipping charges for your order will be calculated and displayed at checkout.

Shipping Methods and Delivery Times: We offer shipping via [Shipping Carrier 1] and [Shipping Carrier 2]. Estimated delivery times are 7 to 7 business days depending on your location.

International Shipping: We currently do not offer international shipping.

Order Tracking: Once your order has shipped, you will receive a shipment confirmation email containing tracking information.

Lost or Damaged Packages: Tingle is not liable for any products damaged or lost during shipping. If you received your order damaged, please contact the shipment carrier to file a claim.

Order Policy:
Planning ahead? Here's what you need to know about placing orders with Tingle:

Lead Time: To ensure timely delivery, all orders must be placed at least one month in advance.

Payment: Payment is required at the time of placing your order. We accept all major credit cards.

Cancellation: Orders can be canceled up to 2 days after the ordered date. A cancellation fee of [Fee Amount] may apply.

Changes to Orders: Requests for changes to your order must be made at least 2 days after the order date.

Please Note: Policies are subject to change without notice. For any questions regarding our policies, feel free to contact us at 8590834441. 
            </div>
        </section>

        
       
    </div>

    @include('user.footer')
</body>

</html>