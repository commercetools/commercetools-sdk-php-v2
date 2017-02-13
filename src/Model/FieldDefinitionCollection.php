<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FieldDefinitionCollection extends Collection {

    /**
     * @param $index
     * @return FieldDefinition|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new FieldDefinition($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return FieldDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
}
