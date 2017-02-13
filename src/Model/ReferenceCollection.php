<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ReferenceCollection extends Collection {

    /**
     * @param $index
     * @return Reference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Reference($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Reference|null
     */
    public function current()
    {
        return parent::current();
    }
}
