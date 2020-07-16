<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetAttributeAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';

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
     * @return null|mixed
     */
    public function getValue();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
