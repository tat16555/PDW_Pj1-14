<?php
session_start();

if (isset($_GET['weight']) && isset($_GET['height'])) {
    $weight = $_GET['weight'];
    $height = $_GET['height'];      
    $bmi = $weight / pow($height / 100, 2);

    if ($bmi < 18.5) {
        $result = "น้ำหนักน้อย/ผอม";
        $risk = "มากกว่าคนปกติ";
    } elseif ($bmi < 23) {
        $result = "ปกติ(สุขภาพดี)";
        $risk = "ปกติ";
    } elseif ($bmi < 25) {
        $result = "ท้วม / โรคอ้วนระดับ 1";
        $risk = "อันตรายระดับ 1";
    } elseif ($bmi < 30) {
        $result = "อ้วน / โรคอ้วนระดับ 2";
        $risk = "อันตรายระดับ 2";
    } else {
        $result = "อ้วนมาก / โรคอ้วนระดับ 3";
        $risk = "อันตรายระดับ 3";
    }

    // Store values in session variables
    $_SESSION['bmi'] = $bmi;
    $_SESSION['result'] = $result;
    $_SESSION['risk'] = $risk;

    header('location: bmi.php?bmi=' . $bmi . '&restlt=' . $restlt . '&risk=' . $risk);
    
    $data = "BMI: $bmi, Result: $result, Risk: $risk\n";
    file_put_contents('bmi.txt', $data, FILE_APPEND);
        // Save array to the file
        $phpCode = '<?php $bmiData = ' . var_export($bmiData, true) . '; ?>';
        file_put_contents('array1.php', $phpCode);
} else {
    header('location: bmi.php');
}
?>
