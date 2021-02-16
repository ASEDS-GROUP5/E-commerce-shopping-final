<?php
require('stripe/init.php');

$publishableKey="pk_test_51IKmK4AquhNtZihCrwied5ewuDudJlArhBhJVT8GXrACjLK239qBU3CwTsoExTqdCLhTyvKzLNLg7x5lal3rC0OA00o48QAV06";

$secretKey="sk_test_51IKmK4AquhNtZihCzcNOvOJu6YDyor8VONoRUSUGRg94We5WRts1JxCYWkx1WPv8Uiznh3dZ4IWjnFQIr17LADK000EdktCyki";

\Stripe\Stripe::setApiKey($secretKey);

?>