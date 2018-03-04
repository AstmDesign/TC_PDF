<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
// $pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

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

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
  require_once(dirname(__FILE__).'/lang/eng.php');
  $pdf->setLanguageArray($l);
}

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

  <table style="width: 400;" cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td><img src="http://naqla.org/master/public/img/logo.png" width="105" height="105"></td>
        <td>&nbsp;</td>
        <td style="width: 340; text-align: center; font-size: 10; font-weight: bold;">
          NAQLA For Transport Services
          <div style="font-size: 15;">نقلة لخدمات النقل</div>
        </td>
      </tr>
      <tr>
        <td style="text-align: center; font-size: 15; font-weight: bold;" colspan="3">كشف مصروفات تشغيل 19190</td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td style="height: 20;padding: 0; direction: rtl; font-size: 10; font-weight: bold; text-align: right;" colspan="3">التاريخ : ٢٨ / ٢ / ٢٠١٨</td>
      </tr>
      <tr>
        <td style="width:185;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;">ملاحظات / ............</td>
        <td style="width:260;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;"> رقم العملية / ............</td>
        <td style="width:185;padding: 0; direction: rtl;font-size: 10; font-weight: bold; text-align: right;">صاحب العهدة / ............</td>
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
      <td style="width: 215; padding: 5; height: 25; text-align: center; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">الاسم :&nbsp;</td>
    </tr>
    <tr>
      <td style="width: 250; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
      <td style="width: 215; padding: 5; height: 25; text-align: center; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">&nbsp;</td>
      <td style="width: 165; padding: 5; height: 25; text-align: right; direction: rtl; border: solid 1 #000000; font-size: 10; font-weight: bold;">التاريخ :</td>
    </tr>
  </table>

</body>
</html>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table width="650" cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td rowspan="3">COL 1 - ROW 1 astm<br />COLSPAN 3<br />text line<br />text line<br />text line<br />text line<br />text line<br />text line</td>
        <td>COL 2 - ROW 1</td>
        <td>COL 3 - ROW 1</td>
    </tr>
    <tr>
    	<td rowspan="2">COL 2 - ROW 2 - COLSPAN 2<br />text line<br />text line<br />text line<br />text line</td>
    	 <td>COL 3 - ROW 2</td>
    </tr>
    <tr>
       <td>COL 3 - ROW 3</td>
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td rowspan="3">COL 1 - ROW 1<br />COLSPAN 3<br />text line<br />text line<br />text line<br />text line<br />text line<br />text line</td>
        <td>COL 2 - ROW 1</td>
        <td>COL 3 - ROW 1</td>
    </tr>
    <tr>
    	<td rowspan="2">COL 2 - ROW 2 - COLSPAN 2<br />text line<br />text line<br />text line<br />text line</td>
    	 <td>COL 3 - ROW 2<br />text line<br />text line</td>
    </tr>
    <tr>
       <td>COL 3 - ROW 3</td>
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table border="1">
<tr>
<th rowspan="3">Left column</th>
<th colspan="5">Heading Column Span 5</th>
<th colspan="9">Heading Column Span 9</th>
</tr>
<tr>
<th rowspan="2">Rowspan 2<br />This is some text that fills the table cell.</th>
<th colspan="2">span 2</th>
<th colspan="2">span 2</th>
<th rowspan="2">2 rows</th>
<th colspan="8">Colspan 8</th>
</tr>
<tr>
<th>1a</th>
<th>2a</th>
<th>1b</th>
<th>2b</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
</tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// Table with rowspans and THEAD
$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2">
<thead>
 <tr style="background-color:#FFFF00;color:#0000FF;">
  <td width="30" align="center"><b>A</b></td>
  <td width="140" align="center"><b>XXXX</b></td>
  <td width="140" align="center"><b>XXXX</b></td>
  <td width="80" align="center"> <b>XXXX</b></td>
  <td width="80" align="center"><b>XXXX</b></td>
  <td width="45" align="center"><b>XXXX</b></td>
 </tr>
 <tr style="background-color:#FF0000;color:#FFFF00;">
  <td width="30" align="center"><b>B</b></td>
  <td width="140" align="center"><b>XXXX</b></td>
  <td width="140" align="center"><b>XXXX</b></td>
  <td width="80" align="center"> <b>XXXX</b></td>
  <td width="80" align="center"><b>XXXX</b></td>
  <td width="45" align="center"><b>XXXX</b></td>
 </tr>
</thead>
 <tr>
  <td width="30" align="center">1.</td>
  <td width="140" rowspan="6">XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX</td>
  <td width="140">XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td width="80">XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
 <tr>
  <td width="30" align="center" rowspan="3">2.</td>
  <td width="140" rowspan="3">XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
 <tr>
  <td width="80">XXXX<br />XXXX<br />XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
 <tr>
  <td width="80" rowspan="2" >RRRRRR<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
 <tr>
  <td width="30" align="center">3.</td>
  <td width="140">XXXX1<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
 <tr>
  <td width="30" align="center">4.</td>
  <td width="140">XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td width="80">XXXX<br />XXXX</td>
  <td align="center" width="45">XXXX<br />XXXX</td>
 </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// NON-BREAKING TABLE (nobr="true")

$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
 <tr>
  <th colspan="3" align="center">NON-BREAKING TABLE</th>
 </tr>
 <tr>
  <td>1-1</td>
  <td>1-2</td>
  <td>1-3</td>
 </tr>
 <tr>
  <td>2-1</td>
  <td>3-2</td>
  <td>3-3</td>
 </tr>
 <tr>
  <td>3-1</td>
  <td>3-2</td>
  <td>3-3</td>
 </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// NON-BREAKING ROWS (nobr="true")

$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2" align="center">
 <tr nobr="true">
  <th colspan="3">NON-BREAKING ROWS</th>
 </tr>
 <tr nobr="true">
  <td>ROW 1<br />COLUMN 1</td>
  <td>ROW 1<br />COLUMN 2</td>
  <td>ROW 1<br />COLUMN 3</td>
 </tr>
 <tr nobr="true">
  <td>ROW 2<br />COLUMN 1</td>
  <td>ROW 2<br />COLUMN 2</td>
  <td>ROW 2<br />COLUMN 3</td>
 </tr>
 <tr nobr="true">
  <td>ROW 3<br />COLUMN 1</td>
  <td>ROW 3<br />COLUMN 2</td>
  <td>ROW 3<br />COLUMN 3</td>
 </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
