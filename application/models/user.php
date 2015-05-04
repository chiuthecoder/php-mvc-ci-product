<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Model {

	public function create($productContent)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($productContent['name'],$productContent['description'],$productContent['price']));
		return $result;	
	}

	public function retrieveAll()
	{
		$query = "SELECT * FROM products";
		$products = $this->db->query( $query)->result_array();
		return $products;	
	}

	public function retrieveOne($id)
	{
		$query = "SELECT * FROM products WHERE id = $id";
		$product = $this->db->query( $query, array($id))->row_array();
		return $product;	
	}

}
