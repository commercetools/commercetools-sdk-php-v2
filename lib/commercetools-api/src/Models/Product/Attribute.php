<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Attribute extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>A valid JSON value, based on an AttributeDefinition.</p>
     *
     * @return null|JsonObject
     */
    public function getValue();

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
