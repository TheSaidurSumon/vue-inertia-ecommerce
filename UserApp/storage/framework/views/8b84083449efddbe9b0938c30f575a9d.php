<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Placed Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .content {
            margin-bottom: 30px;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        .order-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Order Placed Successfully!</h1>
        <p>Thank you for your order. Your order has been received and is pending payment.</p>
    </div>

    <div class="content">
        <h2>Order Details</h2>
        <div class="order-details">
            <p><strong>Order Number:</strong> <?php echo e($order['order_number']); ?></p>
            <p><strong>Date:</strong> <?php echo e($order['date']); ?></p>
            <p><strong>Total Amount:</strong> $<?php echo e($order['amount']); ?></p>
        </div>

        <h3>Order Items</h3>
        <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <thead>
                <tr style="background-color: #f8f9fa;">
                    <th style="padding: 10px; text-align: left;">Product</th>
                    <th style="padding: 10px; text-align: left;">Quantity</th>
                    <th style="padding: 10px; text-align: left;">Size</th>
                    <th style="padding: 10px; text-align: left;">Price</th>
                    <th style="padding: 10px; text-align: left;">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 10px;"><?php echo e($product['title']); ?></td>
                    <td style="padding: 10px;"><?php echo e($product['quantity']); ?></td>
                    <td style="padding: 10px;"><?php echo e($product['size']); ?></td>
                    <td style="padding: 10px;"><?php echo e($product['color']); ?></td>
                    <td style="padding: 10px;">$<?php echo e($product['price']); ?></td>
                    <td style="padding: 10px;">$<?php echo e($product['total']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div style="text-align: center;">
            <a href="<?php echo e($paymentUrl); ?>" class="button" style="color:white;">Pay Now</a>
        </div>
    </div>

    <div class="footer">
        <p>This is an automated message, please do not reply to this email.</p>
    </div>
</body>
</html> <?php /**PATH C:\Users\Lenovo\Desktop\laravel ecommerce\b5_ecom\UserApp\resources\views/emails/order-placed.blade.php ENDPATH**/ ?>