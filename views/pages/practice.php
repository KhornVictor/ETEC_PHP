<div class="w-full grid grid-cols-1 gap-4 overflow-y-auto py-6">
    <?php
        // $numberOfExercises = 10;
        // $exerciseBasePath = __DIR__ . '/../../app/PHP/practice';

        // for ($i = 0; $i <= $numberOfExercises; $i ++) {
        //     $exerciseFile = $exerciseBasePath . "/ex{$i}.php";

        //     echo "<div class='col-span-1 md:col-span-2 bg-white rounded-lg shadow-md p-4'>";
        //     echo "<h2 class='text-xl font-bold mb-4'>Exercise {$i}</h2>";

        //     if (file_exists($exerciseFile))include $exerciseFile;
        //     else echo "<div class='text-sm text-red-500'>Exercise {$i} not found.</div>";   

        //     echo "</div>";
        // }
        for ($i = 1; $i <= 100; $i++) {
            echo "<div class='col-span-1 md:col-span-2 bg-white rounded-lg shadow-md p-4'>";
            echo "<h2 class='text-xl font-bold mb-4'>Exercise {$i}</h2>";
            include "app/PHP/practice/ex{$i}.php";
            echo "</div>";
        }
    ?>
</div>  