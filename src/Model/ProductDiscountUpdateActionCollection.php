<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return ProductDiscountUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductDiscountUpdateAction::resolveDiscriminatorClass($data));
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductDiscountUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
