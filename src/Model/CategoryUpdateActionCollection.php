<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryUpdateActionCollection extends Collection {

    /**
     * @param $index
     * @return CategoryUpdateAction|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new CategoryUpdateAction($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return CategoryUpdateAction|null
     */
    public function current()
    {
        return parent::current();
    }
}
