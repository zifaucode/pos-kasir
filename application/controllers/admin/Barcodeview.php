<?php
class Barcodeview extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_barang');
		// $this->load->library('zend');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['data'] = $this->m_barang->getDataBarcode();
			// $this->zend->load('Zend/Barcode');
			// $image_resource = Zend_Barcode::factory('code128', 'image', array('text' => $sku_number), array())->draw();
			// $image_name     = $sku_number . '.jpg';
			// $image_dir      = './assets/barcode/'; // penyimpanan file barcode
			// imagejpeg($image_resource, $image_dir . $image_name);

			// $data = array(
			// 	'sku_number'    => $this->input->post('sku_number'),
			// 	'product_name'  => $this->input->post('product_name'),
			// 	'product_price' => $this->input->post('product_price'),
			// 	'bar_code'      => $image_name
			// );
			// $this->product->simpan_product($sku_number, $product_name, $product_price, $image_name); //simpan ke database
			// redirect('product'); //redirect ke product usai simpan data
			$this->load->view('admin/v_barcode_barang', $x);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
