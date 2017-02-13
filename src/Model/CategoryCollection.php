<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryCollection extends Collection {

    /**
     * @param $index
     * @return Category|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Category($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Category|null
     */
    public function current()
    {
        return parent::current();
    }
}
