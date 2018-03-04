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

  <table cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td style="width: 245;text-align: left; font-size: 10;">
          <a href="http://www.naqla.org" target="_blank" style="color:#000000;text-decoration: none;">www.naqla.org</a> <br>
          P.O.Box <br>
          Address: <br>
          Telefax: <br>
          Cell: <br>
          Email: <br>
          Commercial Register <br>
          Tax Card <br>
        </td>
        <td style="width: 168;">
          <img src="http://naqla.org/master/public/img/logo.png" width="105" height="105">
        </td>
        <td style="width: 245;text-align: left; font-size: 10;">
          Date: <br>
          OPS Code: <br>
          Booking No: <br>
          Due Date: <br>
        </td>

      </tr>
      <tr>
        <td colspan="3" style=" text-align: center; font-size: 12; font-weight: bold;">
          INVOICE <br> #462354923
        </td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table cellpadding="10" cellspacing="" border="1">
    <tbody>
      <tr>
        <td style="width: 650;text-align: left; color: #ffffff; background-color: #827f7f; font-weight:bold " colspan="2"> Bill To: </td>
      </tr>
      <tr>
        <td style="width: 325;"> Customer Code:  </td>
        <td style="width: 325;">  Address:  </td>
      </tr>
      <tr>
        <td > Customer Name:  </td>
        <td >  Tel:  </td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table cellpadding="2" cellspacing="" border="1">
    <tbody>
      <tr>
        <td style="width: 60; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Job Code</td>
        <td style="width: 45; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Ctr QTY</td>
        <td style="width: 35; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Type</td>
        <td style="width: 60; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Container</td>
        <td style="width: 90; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Gate Out</td>
        <td style="width: 90; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Destination</td>
        <td style="width: 90; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Gate In</td>
        <td style="width: 63; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Price</td>
        <td style="width: 55; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Discount</td>
        <td style="width: 60; height:35; text-align:center; color: #ffffff; background-color: #827f7f; font-weight:bold; font-size: 8 ">Total</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">6961080</td>
        <td style="height:35; text-align:center; font-size: 9 ">90000</td>
        <td style="height:35; text-align:center; font-size: 9 ">توزيع</td>
        <td style="height:35; text-align:center; font-size: 9 ">900000</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">طريق الزقازيق ميت غمر</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">99000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 9000000</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">696108</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">صادر</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">ميناء الدخيلة</td>
        <td style="height:35; text-align:center; font-size: 9 ">مدينة السادات</td>
        <td style="height:35; text-align:center; font-size: 9 ">ساحة اركاس</td>
        <td style="height:35; text-align:center; font-size: 9 ">12000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 1500000</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">6961080</td>
        <td style="height:35; text-align:center; font-size: 9 ">90000</td>
        <td style="height:35; text-align:center; font-size: 9 ">توزيع</td>
        <td style="height:35; text-align:center; font-size: 9 ">900000</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">طريق الزقازيق ميت غمر</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">99000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 9000000</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">696108</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">صادر</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">ميناء الدخيلة</td>
        <td style="height:35; text-align:center; font-size: 9 ">مدينة السادات</td>
        <td style="height:35; text-align:center; font-size: 9 ">ساحة اركاس</td>
        <td style="height:35; text-align:center; font-size: 9 ">12000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 1500000</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">6961080</td>
        <td style="height:35; text-align:center; font-size: 9 ">90000</td>
        <td style="height:35; text-align:center; font-size: 9 ">توزيع</td>
        <td style="height:35; text-align:center; font-size: 9 ">900000</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">طريق الزقازيق ميت غمر</td>
        <td style="height:35; text-align:center; font-size: 9 ">شركة دمياط لتداول الحاويات والبضائع</td>
        <td style="height:35; text-align:center; font-size: 9 ">99000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 9000000</td>
      </tr>
      <tr>
        <td style="height:35; text-align:center; font-size: 9 ">696108</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">صادر</td>
        <td style="height:35; text-align:center; font-size: 9 ">250</td>
        <td style="height:35; text-align:center; font-size: 9 ">ميناء الدخيلة</td>
        <td style="height:35; text-align:center; font-size: 9 ">مدينة السادات</td>
        <td style="height:35; text-align:center; font-size: 9 ">ساحة اركاس</td>
        <td style="height:35; text-align:center; font-size: 9 ">12000000</td>
        <td style="height:35; text-align:center; font-size: 9 ">5%</td>
        <td style="height:35; text-align:center; font-size: 9 "> 1500000</td>
      </tr>
    </tbody>
  </table>

  <table cellpadding="2" cellspacing="" border="0">
    <tbody>
      <tr>
        <td style="width: 400;">

          <br><br>

          <table style="width: 350;" cellpadding="5" cellspacing="" border="1">
            <tbody>
              <tr>
                <td style="width: 350;text-align: left; color: #ffffff; background-color: #827f7f; font-weight:bold "> Notes: </td>
              </tr>
              <tr>
                <td "width: 350;">
                  1-  Please check the order items , Quantity and rates. <br>
                  2-  Cheques in the name of "NAQLA" <br>
                </td>
              </tr>
            </tbody>
          </table>

        </td>
        <td style="width: 248;  text-align:right; font-size: 10 ">

          <table cellpadding="5" cellspacing="" border="0">
            <tbody>
              <tr>
                <td style="text-align:left;border-bottom:solid 1px #000000">Subtotal: 0</td>
              </tr>
              <tr>
                <td style="text-align:left;border-bottom:solid 1px #000000">Tax Rate: 5%</td>
              </tr>
              <tr>
                <td style="text-align:left;border-bottom:solid 1px #000000">Taxes: 0</td>
              </tr>
              <tr>
                <td style="text-align:left; font-weight:bold;">TOTAL: 500</td>
              </tr>
            </tbody>
          </table>

        </td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table cellpadding="2" cellspacing="" border="0">
    <tbody>
      <tr>
        <td style="width: 325;  text-align:left; font-size: 10 ">

          <table cellpadding="5" cellspacing="" border="1">
            <tbody>
              <tr>
                <td style="width: 300;text-align: left; color: #ffffff; background-color: #827f7f; font-weight:bold "> Bank Details: </td>
              </tr>
              <tr>
                <td "width: 300;text-align: left;border-bottom:solid 1px #000000;">
                  Bank: <br>
                  Branch: <br>
                  Account Number: <br>
                  Swift: <br>
                </td>
              </tr>
              <tr>
                <td "width: 300;text-align: left;border-bottom:solid 1px #000000;">
                  Bank: <br>
                  Branch: <br>
                  Account Number: <br>
                  Swift: <br>
                </td>
              </tr>
            </tbody>
          </table>

        </td>
        <td style="width: 40;"></td>
        <td style="width: 325;  text-align:left; font-size: 10 ">

          <table cellpadding="5" cellspacing="" border="1">
            <tbody>
              <tr>
                <td style="width: 270;text-align: left; color: #ffffff; background-color: #827f7f; font-weight:bold "> Add Remarks: </td>
              </tr>
              <tr>
                <td "width: 270;text-align: left;direction: ltr;">
                  1-  Please check the order items , Quantity and rates. <br>
                  2-  Cheques in the name of "NAQLA" <br>
                </td>
              </tr>
            </tbody>
          </table>

        </td>
      </tr>
    </tbody>
  </table>

EOD;


$pdf->writeHTML($tbl, true, false, false, false, '');




$pdf->AddPage();


$tbl = <<<EOD
  <table style="width: 435;" cellpadding="5" cellspacing="0" border="1">
    <tbody>
      <tr>
        <td><img src="http://naqla.org/master/public/img/logo.png" width="105" height="105"></td>
        <td>&nbsp;</td>
        <td style="width: 350; text-align: center; font-size: 12; font-weight: bold;">
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
        <td style=" width: 100; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #827f7f;">المرفقات</td>
        <td style=" width: 290; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #827f7f;">البيان</td>
        <td style=" width: 150; height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #827f7f;">القيمة</td>
        <td style=" width: 90;  height: 25;padding: 5; direction: rtl;text-align: center; font-size: 12; font-weight: bold; color: #ffffff; border: solid 1 #000000; background-color: #827f7f;">مسلسل</td>
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

EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


//Close and output PDF document
$pdf->Output('naqla.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
