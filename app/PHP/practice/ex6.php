<div class="w-full min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl p-6 border">
    
    <div class="text-center border-b pb-4 mb-4">
        <h2 class="text-xl font-bold">Receipt</h2>
    </div>

    <div class="space-y-2 text-sm">
        

        <?php 

            $code = "#A1023";
            $name = "Salt";
            $quantity = 5;
            $price = 10.00;
            $subTotal = $quantity * $price;

            if ($subTotal <= 10) $discount = 0.1;
            elseif ($subTotal <= 20) $discount = 0.2;
            elseif ($subTotal <= 30 ) $discount = 0.3;
            elseif ($subTotal <= 40 ) $discount = 0.4;
            elseif ($subTotal <= 50 ) $discount = 0.5;
            elseif ($subTotal <= 60 ) $discount = 0.6;
            else $discount = 0.7;

            $labelDiscount = $discount * 100;
            $total = $subTotal - ($subTotal * $discount);

            echo <<<HTML
                <div class="flex justify-between">
                <span class="text-gray-500">Code (ID)</span>
                <span class="font-medium">$code</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Name</span>
                <span class="font-medium">$name</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Quantity</span>
                <span class="font-medium">$quantity</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Price</span>
                <span class="font-medium">$price $</span>
                </div>

                <div class="flex justify-between border-t pt-2 mt-2">
                <span class="text-gray-500">Sub Total</span>
                <span class="font-medium">$subTotal $</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Discount</span>
                <span class="font-medium">$labelDiscount %</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Total</span>
                <span class="font-bold">$total $</span>
                </div>

                <div class="flex justify-between">
                <span class="text-gray-500">Payment</span>
                <span class="font-semibold text-green-600">Paid (Cash)</span>
                </div>
            HTML;
        ?>
        

    </div>

    <div class="mt-6 text-center text-xs text-gray-400">
        Generated automatically • Have a nice day!
    </div>

    </div>
</div>