<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
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
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
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
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

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
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<html lang="">
	<head>
    <style>
		/*--- bootstrap css ----*/

		html{
    	font-family:sans-serif;
    	-webkit-text-size-adjust:100%;
    	-ms-text-size-adjust:100%
		}
		body{
		    margin:0
		}
		*{
				-webkit-box-sizing:border-box;
				-moz-box-sizing:border-box;
				box-sizing:border-box
		}
		:after,:before{
				-webkit-box-sizing:border-box;
				-moz-box-sizing:border-box;
				box-sizing:border-box
		}
		.pull-right{
		    float:right!important
		}
		.pull-left{
		    float:left!important
		}
		.container {
			padding-right:60px;
			padding-left:60px
		}
		.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
		    position:relative;
		    min-height:1px;
		    padding-right:15px;
		    padding-left:15px
		}
		.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
		    float:left
		}
		.col-xs-12{
		    width:100%
		}
		.col-xs-11{
		    width:91.66666667%
		}
		.col-xs-10{
		    width:83.33333333%
		}
		.col-xs-9{
		    width:75%
		}
		.col-xs-8{
		    width:66.66666667%
		}
		.col-xs-7{
		    width:58.33333333%
		}
		.col-xs-6{
		    width:50%
		}
		.col-xs-5{
		    width:41.66666667%
		}
		.col-xs-4{
		    width:33.33333333%
		}
		.col-xs-3{
		    width:25%
		}
		.col-xs-2{
		    width:16.66666667%
		}
		.col-xs-1{
		    width:8.33333333%
		}

		@media (min-width:768px){
		    .col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{
		        float:left
		    }
		    .col-sm-12{
		        width:100%
		    }
		    .col-sm-11{
		        width:91.66666667%
		    }
		    .col-sm-10{
		        width:83.33333333%
		    }
		    .col-sm-9{
		        width:75%
		    }
		    .col-sm-8{
		        width:66.66666667%
		    }
		    .col-sm-7{
		        width:58.33333333%
		    }
		    .col-sm-6{
		        width:50%
		    }
		    .col-sm-5{
		        width:41.66666667%
		    }
		    .col-sm-4{
		        width:33.33333333%
		    }
		    .col-sm-3{
		        width:25%
		    }
		    .col-sm-2{
		        width:16.66666667%
		    }
		    .col-sm-1{
		        width:8.33333333%
		    }
		}
		@media (min-width:992px){
		    .col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{
		        float:left
		    }
		    .col-md-12{
		        width:100%
		    }
		    .col-md-11{
		        width:91.66666667%
		    }
		    .col-md-10{
		        width:83.33333333%
		    }
		    .col-md-9{
		        width:75%
		    }
		    .col-md-8{
		        width:66.66666667%
		    }
		    .col-md-7{
		        width:58.33333333%
		    }
		    .col-md-6{
		        width:50%
		    }
		    .col-md-5{
		        width:41.66666667%
		    }
		    .col-md-4{
		        width:33.33333333%
		    }
		    .col-md-3{
		        width:25%
		    }
		    .col-md-2{
		        width:16.66666667%
		    }
		    .col-md-1{
		        width:8.33333333%
		    }
		}
		@media (min-width:1200px){
		    .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{
		        float:left
		    }
		    .col-lg-12{
		        width:100%
		    }
		    .col-lg-11{
		        width:91.66666667%
		    }
		    .col-lg-10{
		        width:83.33333333%
		    }
		    .col-lg-9{
		        width:75%
		    }
		    .col-lg-8{
		        width:66.66666667%
		    }
		    .col-lg-7{
		        width:58.33333333%
		    }
		    .col-lg-6{
		        width:50%
		    }
		    .col-lg-5{
		        width:41.66666667%
		    }
		    .col-lg-4{
		        width:33.33333333%
		    }
		    .col-lg-3{
		        width:25%
		    }
		    .col-lg-2{
		        width:16.66666667%
		    }
		    .col-lg-1{
		        width:8.33333333%
		    }
		}

		/*--- custom css ----*/

    .header , .body ,.table-wrapper , .right-wrapper {
      padding: 5px 0px;
    }

    a{
      color: #000000;
    }

    .logo-wrapper {
      width: 105px;
    }

    .logo{
      width: 100%;
      height: 105px;
      background-image: url("http://naqla.org/master/public/img/logo.png");
    }

		.right-wrapper {
			text-align: center;
			font-size: 20px;
			font-weight: bold;
		}

		.right-wrapper .ar {
			font-size: 28px;
		}

		.statment-title {
			text-align: center;
	    font-size: 30px;
	    font-weight: bold;
		}

		.statment-label-wrapper {
			margin-bottom: 10px;
			padding: 0px;
			font-size: 18px;
	    font-weight: bold;
			text-align: right;
		}

		.statment-label-wrapper div {
			padding: 0px;
			direction: rtl;
		}

    .table-wrapper {
      margin-bottom: 20px;
      padding: 0px;
      border: solid 1px #000000;
    }

    .table-wrapper div {
      padding: 10px 5px;
    }

    .table-title {
      text-align: left;
      color: #ffffff;
      background-color: #cccccc;
    }

    .table-with-cells .table-title , .table-with-cells .table-row {
      padding: 0px;
    }

    .table-title .cell {
      float: right;
      width: 10%;
      text-align: center;
			font-size: 18px;
			font-weight: bold;
      color: #ffffff;
      border: solid 1px #000000;
      background-color: #cccccc;
    }

    .table-row .cell
    {
      float:right;
      padding-top: 15px;
      width: 10%;
      text-align: center;
      height: 50px;
      overflow: hidden;
      border: solid 1px #000000;
    }

    .cell.id {
      width: 7%;
    }

		.cell.data {
			width: 73%;
		}

    .table-row:nth-child(odd) {
      background: #cccccc4d;
    }

		.table-footer {
			padding: 0px !important;
			font-size: 20px;
			font-weight: bold;
		}

		.table-footer div{
			float: right;
			padding: 5px;
			height: 40px;
			text-align: right;
			direction: rtl;
			border: solid 1px #000000;
		}

		.table-footer .cell-1{
			width: 20%;
		}

		.table-footer .cell-2{
			width: 20%;
			text-align: center;
		}

		.table-footer .cell-3{
			width: 60%;
		}

    </style>

	</head>
	<body>

    <!--container-->
    <div class="container">

      <!--header-->
      <div class="header pull-left col-md-12 col-xs-12">

        <!--logo-wrapper-->
        <div class="logo-wrapper pull-left">
          <div class="logo pull-left"></div>
        </div><!--logo-wrapper-->

        <!--right-wrapper-->
        <div class="right-wrapper pull-right col-md-4 col-xs-12">
					NAQLA For Transport Services
				 <div class="ar">نقلة لخدمات النقل </div>
        </div><!--right-wrapper-->

				<!--statment-title-->
				<div class="statment-title pull-left col-md-12 col-xs-12">
					كشف مصروفات تشغيل  19190
				</div><!--statment-title-->

      </div><!--header-->


      <!--body-->
      <div class="body pull-left col-md-12 col-xs-12">

				<!--statment-label-wrapper-->
				<div class="statment-label-wrapper pull-right col-md-12 col-xs-12">
					<div class="date pull-right col-md-12 col-xs-12">التاريخ : ٢٨ / ٢ / ٢٠١٨</div>
					<div class="date pull-right col-md-4 col-xs-12">اسم صاحب العهدة / ............</div>
					<div class="date pull-right col-md-4 col-xs-12"> رقم العملية / ............</div>
					<div class="date pull-right col-md-4 col-xs-12"> ملاحظات  / ............</div>

				</div><!--statment-label-wrapper-->

        <!--table-wrapper-->
        <div class="table-wrapper table-with-cells pull-right col-md-12 col-xs-12">

          <!--table-title-->
          <div    class="table-title col-md-12 col-xs-12">
            <div  class="cell id">م</div>
						<div  class="cell value">القيمة</div>
						<div  class="cell data">البيان</div>
						<div  class="cell attached">عدد المرفقات</div>
          </div><!--table-title-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">1</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">2</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">3</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">4</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">5</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">6</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">7</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">8</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">9</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->

					<!--table-row-->
          <div   class="table-row col-md-12 col-xs-12">
						<div class="cell id">10</div>
						<div class="cell value">000000002</div>
						<div class="cell data">000000003</div>
            <div class="cell attached">000000004</div>
          </div><!--table-row-->


					<!--table-footer-->
					<div class="table-footer col-md-12 col-xs-12">

						<div class="cell-1"></div>
						<div class="cell-2">إجمالى المصروفات </div>
						<div class="cell-3">فقط وقدره :   ........</div>

						<div class="cell-1"></div>
						<div class="cell-2">العهدة </div>
						<div class="cell-3">فقط وقدره :   ........</div>

						<div class="cell-1"></div>
						<div class="cell-2">دائن / مدين </div>
						<div class="cell-3">فقط وقدره :   ........</div>

						<div class="cell-1">الاسم : </div>
						<div class="cell-2">............ </div>
						<div class="cell-3"></div>

						<div class="cell-1">التاريخ : </div>
						<div class="cell-2">............ </div>
						<div class="cell-3"></div>

					</div><!--table-footer-->


        </div><!--table-wrapper-->

      </div><!--body-->


    </div><!--container-->

	</body>
</html>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
