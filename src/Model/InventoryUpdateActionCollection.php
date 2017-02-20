<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return InventoryUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, InventoryUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return InventoryUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
