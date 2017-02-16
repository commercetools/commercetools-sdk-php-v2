<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ErrorObjectCollection extends Collection {

    /**
     * @param $index
     * @return ErrorObject|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ErrorObject::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ErrorObject|null
     */
    public function current()
    {
        return parent::current();
    }
}
