<?php
class Products extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_products($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('products');
                        return $query->result_array();
                }

                $query = $this->db->get_where('products', array('slug' => $slug));
                return $query->row_array();
        }


        public function set_product()
        {
        	$this->load->helper('url');
        	$slug = url_title($this->input->post('product_name'), 'dash', TRUE);
        	$data = array(
        	        'product_name' => $this->input->post('product_name'),
        	        'slug' => $slug,
        	        'product_detail' => $this->input->post('product_detail')
        	    );
        	return $this->db->insert('products', $data);

        }
}