<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangeAttributeConstraintAction extends ProductTypeUpdateAction {
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_NEW_VALUE = 'newValue';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return string
     */
    public function getNewValue();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param string $newValue
     * @return $this
     */
    public function setNewValue(string $newValue);

}
