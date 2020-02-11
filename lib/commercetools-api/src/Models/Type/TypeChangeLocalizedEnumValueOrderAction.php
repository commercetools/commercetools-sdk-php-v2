<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TypeChangeLocalizedEnumValueOrderAction extends TypeUpdateAction
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

    public function setFieldName(?string $fieldName): void;

    public function setKeys(?array $keys): void;
}
