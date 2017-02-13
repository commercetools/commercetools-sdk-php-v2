<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeDefinitionCollection extends Collection {

    /**
     * @param $index
     * @return AttributeDefinition|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new AttributeDefinition($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return AttributeDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
}
