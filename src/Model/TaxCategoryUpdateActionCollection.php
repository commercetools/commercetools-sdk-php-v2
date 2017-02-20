<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return TaxCategoryUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, TaxCategoryUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return TaxCategoryUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
