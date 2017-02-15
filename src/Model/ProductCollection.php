<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductCollection extends Collection {

    /**
     * @param $index
     * @return Product|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Product::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Product|null
     */
    public function current()
    {
        return parent::current();
    }
}
