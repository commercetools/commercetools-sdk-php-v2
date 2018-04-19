<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangeEnumKeyAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_KEY = 'key';
    const FIELD_NEW_KEY = 'newKey';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getNewKey();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $newKey
     * @return $this
     */
    public function setNewKey(string $newKey);

}
