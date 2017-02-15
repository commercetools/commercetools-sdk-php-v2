<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateReferenceCollection extends Collection {

    /**
     * @param $index
     * @return StateReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, StateReference::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return StateReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
