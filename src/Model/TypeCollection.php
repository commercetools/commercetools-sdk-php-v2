<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TypeCollection extends Collection {

    /**
     * @param $index
     * @return Type|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Type::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Type|null
     */
    public function current()
    {
        return parent::current();
    }
}
