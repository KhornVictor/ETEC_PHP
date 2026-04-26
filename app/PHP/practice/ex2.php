<div class="min-h-screen bg-white text-slate-900 flex items-center justify-center p-6">
    <div class="w-auto h-auto bg-slate-100 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Student Scores</h2>
        <?php
            $subjects = ["Math", "Science", "Literature", "History", "Art"];
            $scores = [90, 85, 88, 92, 87];
            echo "<table class='list-disc pl-5 border-collapse border border-slate-400 w-full'>";
            echo "<tr class='bg-slate-900 text-white'><th>Subject</th><th>Score</th></tr>";
            for ($i = 0; $i < count($subjects); $i++) {
                echo "<tr><td>{$subjects[$i]}</td><td>{$scores[$i]}</td></tr>";
            }
            echo "</table>";
            $sum = $scores[0] + $scores[1] + $scores[2] + $scores[3] + $scores[4];
            $average = $sum / count($scores);
            echo "<p class='mt-4'><strong>Total Score:</strong> " . $sum . "</p>";
            echo "<p class='mt-4'><strong>Average Score:</strong> " . $average . "</p>";
        ?>
       
    </div>
</div>