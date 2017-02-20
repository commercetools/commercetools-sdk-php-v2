<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return ZoneUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ZoneUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ZoneUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
