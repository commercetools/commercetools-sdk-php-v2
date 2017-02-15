<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class PriceDraftCollection extends Collection {

    /**
     * @param $index
     * @return PriceDraft|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, PriceDraft::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return PriceDraft|null
     */
    public function current()
    {
        return parent::current();
    }
}
