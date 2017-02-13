<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return ProductTypeUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new ProductTypeUpdateAction($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductTypeUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
