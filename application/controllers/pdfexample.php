<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Home Controller */
	class Pdfexample extends CI_Controller 
	{
		public function index()
		{
			$this->load->library('Pdf');
			// print_r($result);

			$this->load->model('registrationdata');

            $data = $this->registrationdata->ajaxdata();
            // echo "<pre>";
            // print_r($data);
            // die();
            $srno = 0;
            $html = '<table border="2px" style="font-size: 15px;border:2px;text-align:center;cellpadding:20;">
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                        </tr>';
                foreach($data as $key => $value){
                    $html .= '<tr>
                                <td>'.++$srno.'</td>
                                <td>'.$value['fname'].'</td>
                                <td>'.$value['lname'].'</td>
                                <td>'.$value['email'].'</td>
                            </tr>';
                }
                $html .= '</table>';
            
            // $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

            // create new PDF document
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


            // $pdf->SetTitle('users data');
            // $pdf->SetHeaderMargin(30);
            // $pdf->SetTopMargin(20);
            // $pdf->setFooterMargin(20);
            // $pdf->SetAutoPageBreak(true);
            // $pdf->SetAuthor('Author');
            // $pdf->SetDisplayMode('real', 'default');
            // $pdf->Write(5, 'CodeIgniter TCPDF Integration');
            // $pdf->Output('pdfexample.pdf', 'I');

            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Ajay kumar');
            $pdf->SetTitle('vfffb');
            $pdf->SetSubject("sfffbfbbb");
            $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 100', PDF_HEADER_STRING);

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

            // set font
            $pdf->SetFont('times', '', 9);

            // add a page
            $pdf->AddPage();

            // create some HTML content
            // $html = ;
            
            // output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

            // reset pointer to the last page
            $pdf->lastPage();

            // ---------------------------------------------------------

            //Close and output PDF document
            $pdf->Output('ajay.pdf', 'I');

	    }

	}

?>