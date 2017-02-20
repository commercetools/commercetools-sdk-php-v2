<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneCollection extends Collection {

    /**
     * @param $index
     * @return Zone|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Zone::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Zone|null
     */
    public function current()
    {
        return parent::current();
    }
}
