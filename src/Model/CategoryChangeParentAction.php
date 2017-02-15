<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryChangeParentAction extends CategoryUpdateAction {
    protected $parent;
    const DISCRIMINATOR_VALUE = 'changeParent';

    /**
     * @return CategoryReference
     */
    public function getParent(): CategoryReference
    {
        if (is_null($this->parent)) {
            $value = $this->raw('parent');
            if (!is_null($value)) {
                $this->parent = Mapper::map($value, CategoryReference::class);
            } else {
                return Mapper::map([], CategoryReference::class);
            }
        }
        return $this->parent;
    }
                
}
