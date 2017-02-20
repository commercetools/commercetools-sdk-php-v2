<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class LocationCollection extends Collection {

    /**
     * @param $index
     * @return Location|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Location::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Location|null
     */
    public function current()
    {
        return parent::current();
    }
}
