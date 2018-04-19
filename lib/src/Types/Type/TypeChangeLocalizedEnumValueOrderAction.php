<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeChangeLocalizedEnumValueOrderAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_KEYS = 'keys';

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return array
     */
    public function getKeys();

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName);

    /**
     * @param array $keys
     * @return $this
     */
    public function setKeys($keys);

}
