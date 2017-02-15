<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductVariantAvailabilityCollection extends Collection {

    /**
     * @param $index
     * @return ProductVariantAvailability|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductVariantAvailability::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductVariantAvailability|null
     */
    public function current()
    {
        return parent::current();
    }
}
