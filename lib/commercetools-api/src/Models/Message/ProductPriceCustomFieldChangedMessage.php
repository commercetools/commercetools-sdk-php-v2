<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceCustomFieldChangedMessage extends Message
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a> of which the Custom Field was changed.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the Price belongs.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Name of the Custom Field that was changed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:ProductSetProductPriceCustomFieldAction">Set Price CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
