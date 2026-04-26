<div class="w-full min-h-screen bg-gray-100 justify-start items-start flex p-6 flex-wrap gap-4">
    <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo <<<html
                    <div class='bg-blue-500 text-white p-4 rounded mb-2'>Even: $i</div>
                html;
            } else {
                echo <<<html
                    <div class='bg-green-500 text-white p-4 rounded mb-2'>Odd: $i</div>
                html;
            }
        }
    ?>
</div>