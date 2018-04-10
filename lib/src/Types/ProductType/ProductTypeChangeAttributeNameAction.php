<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangeAttributeNameAction extends ProductTypeUpdateAction {
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_NEW_ATTRIBUTE_NAME = 'newAttributeName';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return string
     */
    public function getNewAttributeName();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param string $newAttributeName
     * @return $this
     */
    public function setNewAttributeName(string $newAttributeName);

}
