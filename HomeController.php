<?php
namespace App\Controller;
use Cake\Core\Configure;
use Cake\Controller\Controller;
use Cake\Event\Event;

class HomeController extends AppController
{
    public function pdf()
    {
      include(ROOT.'\vendor\mpdf60\mpdf.php');
      $html='<h1 style="text-align:center;" 	>This is testing heading</h1>';
      $mpdf=new \ mPDF('c'); 
      $mpdf->WriteHTML($html);
      $mpdf->Output();
      exit;
    }

}
?>
