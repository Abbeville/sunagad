<?php

namespace App\Basket;

use App\Support\Storage\Contracts\StorageInterface;
use App\Models\Product;

use App\Basket\Exceptions\QuantityExceededException;

class Basket
{
	protected $storage;

	protected $product;
	
	function __construct(StorageInterface $storage, Product $product)
	{
		$this->storage = $storage;
		$this->product = $product;
	}

	public function add($product, $quantity)
	{
		if ($this->has($product)) {
			//set quantity to the current quantity + new quantity
			$quantity = $this->get($product)['quantity'] + $quantity;
		}
		
		//update session with product
		$this->update($product, $quantity);
	}

	public function update($product, $quantity)
	{
		if (!$this->product->find($product->id)->hasStock($quantity)) {
			//return exception
			throw new QuantityExceededException;
		}

		if($quantity == 0){
			$this->remove($product);

			return;
		}

		$this->storage->set($product->id, [
			'product_id' => (int) $product->id,
			'quantity' => (int) $quantity
		]);
	}

	public function remove(Product $product)
	{
		$this->storage->unset($product->id);
	}

	public function has($product)
	{
		return $this->storage->exists($product->id);
	}

	public function get($product)
	{
		return $this->storage->get($product->id);
	}

	public function clear()
	{
		$this->storage->clear();
	}

	public function all()
	{
		$ids = [];
		$items = [];

		foreach($this->storage->all() as $product){
			$ids[] = $product['product_id'];
		}

		$products = $this->product->find($ids);

		foreach($products as $product){
			$product->quantity = $this->get($product)['quantity'];

			$items[] = $product;
		}

		return $items;
	}

	public function itemCount()
	{
		return count($this->storage);
	}

	public function subTotal()
	{
		$total = 0;

		foreach ($this->all() as $item) {
			if ($item->outOfStock()) {
				continue;
			}


			$total = $total + $item->price * $item->quantity;
		}

		return $total;
	}

	public function shippingFee()
	{
		return 0;
	}

	public function refresh()
	{
		foreach($this->all() as $item) {
			if(!$item->hasStock($item->quantity)) {
				$this->update($item, $item->stock);
			}

			// else if ($item->hasStock(1) && $item->quantity == 0) {
			// 	$this->update($item, 1);
			// }
		}
	}

}