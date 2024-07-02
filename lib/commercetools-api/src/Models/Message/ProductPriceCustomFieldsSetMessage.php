<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceCustomFieldsSetMessage extends Message
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_CUSTOM_FIELD = 'customField';
    public const FIELD_OLD_TYPE_ID = 'oldTypeId';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a> on which the Custom Type was set.</p>
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
     * <p>Custom Fields that were set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomField();

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getOldTypeId();

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
     * @param ?CustomFields $customField
     */
    public function setCustomField(?CustomFields $customField): void;

    /**
     * @param ?string $oldTypeId
     */
    public function setOldTypeId(?string $oldTypeId): void;
}
