<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeEnumValueOrderAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_KEYS = 'keys';

    /**
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|array
     */
    public function getKeys();

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?array $keys
     */
    public function setKeys(?array $keys): void;
}
