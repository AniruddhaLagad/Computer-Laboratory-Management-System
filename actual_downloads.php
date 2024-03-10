<?php
if(isset($_GET['class'])) {
    $class = $_GET['class'];
    switch($class) {
        case 'FYBCA':
            $pdfFile = 'bca_fy_labbook1.pdf';
            break;
        case 'SYBCA':
            $pdfFile = 'bca_sy_labbook1.pdf';
            break;
        case 'TYBCA':
            $pdfFile = 'bca_ty_labbook1.pdf';
            break;
        case 'FYBCS':
            $pdfFile = 'bcs_fy_labbook1.pdf';
            break;
        case 'SYBCS':
            $pdfFile = 'bcs_sy_labbook1.pdf';
            break;
        case 'TYBCS':
            $pdfFile = 'bcs_ty_labbook1.pdf';
            break;
        case 'FYMCA':
            $pdfFile = 'mca_fy_labbook1.pdf';
            break;
        case 'SYMCA':
            $pdfFile = 'mca_sy_labbook1.pdf';
            break;
        case 'FYMCS':
            $pdfFile = 'mcs_fy_labbook1.pdf';
            break;
        case 'SYMCS':
            $pdfFile = 'mcs_sy_labbook1.pdf';
            break;
        default:
            $pdfFile = '';
    }

    if($pdfFile !== '') {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="'.$pdfFile.'"');
        readfile($pdfFile);
        exit;
    }
}
?>
