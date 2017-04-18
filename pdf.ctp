<?php
/* this way is very simple */
      include(ROOT.'\vendor\mpdf60\mpdf.php');
      $html='<h1 style="text-align:center;" 	>This is testing heading</h1>';
      $mpdf=new \ mPDF('c'); 
      $mpdf->WriteHTML($html);
      $mpdf->Output();
      exit;

?>
