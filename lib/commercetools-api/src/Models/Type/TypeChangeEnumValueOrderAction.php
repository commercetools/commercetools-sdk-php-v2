<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface TypeChangeEnumValueOrderAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_KEYS = 'keys';

    /**
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|array
     */
    public function getKeys();

    public function setFieldName(?string $fieldName): void;

    public function setKeys(?array $keys): void;
}
