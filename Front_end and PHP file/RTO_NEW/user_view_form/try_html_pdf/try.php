<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("lavanyapjain", "8e28941f481a1524590ec2e277650b38");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertURI('http://localhost/RTO_NEW/user_view_form/try_html_pdf/try.php');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>