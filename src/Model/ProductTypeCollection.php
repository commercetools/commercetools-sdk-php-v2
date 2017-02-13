<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeCollection extends Collection {

    /**
     * @param $index
     * @return ProductType|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductType::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductType|null
     */
    public function current()
    {
        return parent::current();
    }
}
