<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxRateCollection extends Collection {

    /**
     * @param $index
     * @return TaxRate|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, TaxRate::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return TaxRate|null
     */
    public function current()
    {
        return parent::current();
    }
}
