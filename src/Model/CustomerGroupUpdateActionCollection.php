<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerGroupUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return CustomerGroupUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, CustomerGroupUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return CustomerGroupUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
