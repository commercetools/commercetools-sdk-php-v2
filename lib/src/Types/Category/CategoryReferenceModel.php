<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CategoryReferenceModel extends ReferenceModel implements CategoryReference {
    const DISCRIMINATOR_VALUE = 'category';

    /**
     * @var Category
     */
    protected $obj;

    /**
     * @return Category
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CategoryReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Category::class, null);
            }
            $value = $this->mapData(Category::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Category $obj
     * @return $this
     */
    public function setObj(Category $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
