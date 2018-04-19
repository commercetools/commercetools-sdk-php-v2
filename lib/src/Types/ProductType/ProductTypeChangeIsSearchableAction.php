<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangeIsSearchableAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return mixed
     */
    public function getIsSearchable();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param mixed $isSearchable
     * @return $this
     */
    public function setIsSearchable($isSearchable);

}
