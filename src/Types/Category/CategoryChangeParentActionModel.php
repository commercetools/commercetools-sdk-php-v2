<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionModel;

class CategoryChangeParentActionModel extends CategoryUpdateActionModel implements CategoryChangeParentAction {
    const DISCRIMINATOR_VALUE = 'changeParent';

    /**
     * @var CategoryReference
     */
    protected $parent;

    /**
     * @return CategoryReference
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            $value = $this->raw(CategoryChangeParentAction::FIELD_PARENT);
            if (is_null($value)) {
                return $this->mapData(CategoryReference::class, null);
            }
            $value = $this->mapData(CategoryReference::class, $value);

            $this->parent = $value;
        }
        return $this->parent;
    }

    /**
     * @param CategoryReference $parent
     * @return $this
     */
    public function setParent(CategoryReference $parent)
    {
        $this->parent = $parent;

        return $this;
    }

}
