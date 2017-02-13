<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeReferenceCollection extends Collection {

    /**
     * @param $index
     * @return ProductTypeReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductTypeReference::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductTypeReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
