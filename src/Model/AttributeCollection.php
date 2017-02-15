<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeCollection extends Collection {

    /**
     * @param $index
     * @return Attribute|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Attribute::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Attribute|null
     */
    public function current()
    {
        return parent::current();
    }
}
