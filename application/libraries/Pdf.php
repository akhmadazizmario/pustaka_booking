<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 */

use Dompdf\Dompdf;

class Pdf extends Dompdf
{
	/**
	 * PDF filename
	 * @var String
	 */
	public $filename;
	public function __construct()
	{
		parent::__construct();
		$this->filename = "laporan.pdf";
	}
	/**
	 * Get an instance of CodeIgniter
	 *
	 * @access    protected
	 * @return    void
	 */
	protected function ci()
	{
		return get_instance();
	}
	/**
	 * Load a CodeIgniter view into domPDF
	 *
	 * @access    public
	 * @param    string    $view The view to load
	 * @param    array    $data The view data
	 * @return    void
	 */
	public function load_view($view, $data = array())
	{
		$html = $this->ci()->load->view($view, $data, TRUE);
		$this->loadHtml($html);
		// Render the PDF
		$this->render();
		// Output the generated PDF to Browser
		$this->stream($this->filename, array("Attachment" => false));
	}

	public function createPDF($html, $filename = '', $download = TRUE, $paper = 'A4', $orientation = 'portrait')
	{
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
		if ($download)
			$dompdf->stream($filename . '.pdf', array('Attachment' => 1));
		else
			$dompdf->stream($filename . '.pdf', array('Attachment' => 0));
	}
}
