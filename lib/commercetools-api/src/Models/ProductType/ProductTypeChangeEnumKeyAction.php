<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductTypeChangeEnumKeyAction extends ProductTypeUpdateAction
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_KEY = 'key';
    public const FIELD_NEW_KEY = 'newKey';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getNewKey();

    public function setAttributeName(?string $attributeName): void;

    public function setKey(?string $key): void;

    public function setNewKey(?string $newKey): void;
}
