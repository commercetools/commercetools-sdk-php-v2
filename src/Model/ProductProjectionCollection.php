<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductProjectionCollection extends Collection {

    /**
     * @param $index
     * @return ProductProjection|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductProjection::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductProjection|null
     */
    public function current()
    {
        return parent::current();
    }
}
