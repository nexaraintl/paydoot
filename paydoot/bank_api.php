<?php
if(isset($_POST['ifsc'])) {
    $ifsc = $_POST['ifsc'];
    $json = @file_get_contents(
        "https://ifsc.razorpay.com/".$ifsc);
    $arr = json_decode($json);

    if(isset($arr->BRANCH)) {
        $bank=array(
            "bank_name"=>$arr->BANK,
            "branch_name"=>$arr->BRANCH,
            "branch_center"=>$arr->CENTRE,
            "branch_district"=>$arr->DISTRICT,
            "branch_state"=>$arr->STATE,
            "branch_address"=>$arr->ADDRESS
        );
        echo json_encode($bank);
    }
    else {
        echo "Invalid IFSC Code";
    }
}
?>
