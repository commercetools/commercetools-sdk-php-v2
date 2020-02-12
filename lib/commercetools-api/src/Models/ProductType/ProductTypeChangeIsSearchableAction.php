<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeIsSearchableAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|bool
     */
    public function getIsSearchable();

    public function setAttributeName(?string $attributeName): void;

    public function setIsSearchable(?bool $isSearchable): void;
}
