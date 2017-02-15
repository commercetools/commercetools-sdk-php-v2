<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountReferenceCollection extends Collection {

    /**
     * @param $index
     * @return ProductDiscountReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductDiscountReference::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductDiscountReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
