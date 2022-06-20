<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeEnumKeyAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_KEY = 'key';
    public const FIELD_NEW_KEY = 'newKey';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>Existing key to be changed.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>New key to be set.</p>
     *
     * @return null|string
     */
    public function getNewKey();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $newKey
     */
    public function setNewKey(?string $newKey): void;
}
