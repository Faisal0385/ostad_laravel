<?php
// Function to check marks and calculate result
function calculateStudentResult($marks)
{
    $totalMarks = 0;
    $numSubjects = count($marks);

    // Validate the array values
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        }
        if ($mark < 33) {
            echo "Fail: Scored below 33 in one or more subjects.";
            return;
        }
        $totalMarks += $mark;
    }

    // Calculate average marks
    $averageMarks = $totalMarks / $numSubjects;

    // Determine grade using switch-case
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output result
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade";
}

// Example marks for 5 subjects
$subjectMarks = [60, 55, 72, 55, 65];

// Call the function to calculate and output the result
calculateStudentResult($subjectMarks);
?>