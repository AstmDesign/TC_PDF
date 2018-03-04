<?php

// Include the main TCPDF library (search for installation path).
require_once('include.php');

/**
 * Page orientation (P=portrait, L=landscape).
 */
define ('PDF_PAGE_ORIENTATION', 'P');


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Naqla');
$pdf->SetTitle('Naqla Invoices');
$pdf->SetSubject('Naqla Invoices');
$pdf->SetKeywords('Naqla, Invoice, Jobs');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));


$pdf->Write(0, '', '', 0, 'L', true, 0, false, false, 0);


// -----------------------------------------------------------------------------

$tbl = <<<EOD
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Statment template</title>
</head>
<body>

  <table style="width: 435;" cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td><img src="http://naqla.org/master/public/img/logo.png" width="105" height="105"></td>
        <td>&nbsp;</td>
        <td style="width: 340; text-align: center; font-size: 12; font-weight: bold;">
          NAQLA For Transport Services
          <div style="font-size: 15;">نقلة لخدمات النقل</div>
        </td>
      </tr>
      <tr>
        <td style="text-align: center; font-size: 15; font-weight: bold;" colspan="3">كشف مصروفات تشغيل 19190</td>
      </tr>
    </tbody>
  </table>

  <br><br><br>

  <table cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td style="height: 20;padding: 0; direction: rtl; font-size: 10; font-weight: bold; text-align: right;" colspan="3">التاريخ : ٢٨ / ٢ / ٢٠١٨</td>
      </tr>
      <tr>
        <td style="width:185;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;">ملاحظات / ............</td>
        <td style="width:260;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;"> رقم العملية / ............</td>
        <td style="width:185;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;">صاحب العهدة / ............ </td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table style="width: 555;" cellpadding="5" cellspacing="0" border="0">
    <tbody>
      <tr>
        <td style=" width: 100; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #cccccc;">المرفقات</td>
        <td style=" width: 290; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #cccccc;">البيان</td>
        <td style=" width: 150; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #cccccc;">القيمة</td>
        <td style=" width: 90;  height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #cccccc;">مسلسل</td>
      </tr>

      <tr>
        <td style="width: 100; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 290; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>
      <tr>
        <td style="width: 100; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 290; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>
      <tr>
        <td style="width: 100; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 290; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>
      <tr>
        <td style="width: 100; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 290; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>
      <tr>
        <td style="width: 100; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 290; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>
      <tr>
        <td style="width: 100; height: 25; padding-top: 15px; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000009 </td>
        <td style="width: 290; height: 25; padding-top: 15px; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 150; height: 25; padding-top: 15px; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
        <td style="width: 90;  height: 25; padding-top: 15px; text-align: center; overflow: hidden; border: solid 1 #000000;"> 000000001 </td>
      </tr>

    </tbody>
  </table>

  <table cellpadding="5" cellspacing="0">
    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">فقط وقدرة :</td>
      <td style="width: 215; padding: 5; height: 25; text-align: center; direction:rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">إجمالى المصروفات</td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
    </tr>

    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">فقط وقدرة :</td>
      <td style="width: 215; padding: 5; height: 25; text-align: center; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">العهدة</td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
    </tr>
    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">فقط وقدرة :</td>
      <td style="width: 215; padding: 5; height: 25; text-align: center; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">دائن / مدين</td>
      <td style="width: 165; padding: 5; height: 25; text-align: center; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
    </tr>
    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
      <td style="width: 215; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;"> ........................ </td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">الاسم :&nbsp;</td>
    </tr>
    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
      <td style="width: 215; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;"> ........................ </td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">التاريخ :</td>
    </tr>
  </table>

  <br><br><br>

  <table cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;">يعتمد </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;">مراجعة</td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;">محاسب </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;">مدير التشغيل</td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;">مدير العملية</td>
      </tr>
      <tr>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;"> ............ </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;"> ............ </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;"> ............ </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;"> ............ </td>
        <td style="width:126;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: center;"> ............ </td>
      </tr>
    </tbody>
  </table>


</body>
</html>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');



//Close and output PDF document
$pdf->Output('naqla.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
