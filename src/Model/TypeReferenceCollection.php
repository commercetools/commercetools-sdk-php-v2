<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TypeReferenceCollection extends Collection {

    /**
     * @param $index
     * @return TypeReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, TypeReference::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return TypeReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
