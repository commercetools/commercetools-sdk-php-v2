<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetAttributeAction extends ProductUpdateAction
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>If the attribute exists and the value is omitted or set to <code>null</code>, the attribute is removed.
     * If the attribute exists and a value is provided, the new value is applied.
     * If the attribute does not exist and a value is provided, it is added as a new attribute.</p>
     *
     * @return null|JsonObject
     */
    public function getValue();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;

    public function setStaged(?bool $staged): void;
}
