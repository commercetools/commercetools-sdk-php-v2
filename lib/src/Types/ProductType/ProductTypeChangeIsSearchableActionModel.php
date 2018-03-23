<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeIsSearchableActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeIsSearchableAction {
    const DISCRIMINATOR_VALUE = 'changeIsSearchable';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var mixed
     */
    protected $isSearchable;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeIsSearchableAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        if (is_null($this->isSearchable)) {
            $value = $this->raw(ProductTypeChangeIsSearchableAction::FIELD_IS_SEARCHABLE);
            $this->isSearchable = $value;
        }
        return $this->isSearchable;
    }

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName)
    {
        $this->attributeName = (string)$attributeName;

        return $this;
    }
    /**
     * @param $isSearchable
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;

        return $this;
    }

}
