<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return StateUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, StateUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return StateUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
