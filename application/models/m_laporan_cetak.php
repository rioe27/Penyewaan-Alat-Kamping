<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_laporan_cetak extends CI_Model {
 
    public function get_produk()
    {
        $query = $this->db->get('penyewaan');
        return $query->result_array();
    }
}
?>