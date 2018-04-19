<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeRemoveEnumValuesAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_KEYS = 'keys';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return array
     */
    public function getKeys();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param array $keys
     * @return $this
     */
    public function setKeys($keys);

}
