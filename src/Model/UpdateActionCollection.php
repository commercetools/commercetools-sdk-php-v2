<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class UpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return UpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, UpdateAction::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return UpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
