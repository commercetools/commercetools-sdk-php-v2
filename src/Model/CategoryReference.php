<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'category';

    /**
     * @return Category
     */
    public function getObj(): Category
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Category::class);
            } else {
                return Mapper::map([], Category::class);
            }
        }
        return $this->obj;
    }
                
}
