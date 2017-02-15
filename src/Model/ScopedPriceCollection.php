<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ScopedPriceCollection extends Collection {

    /**
     * @param $index
     * @return ScopedPrice|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ScopedPrice::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ScopedPrice|null
     */
    public function current()
    {
        return parent::current();
    }
}
