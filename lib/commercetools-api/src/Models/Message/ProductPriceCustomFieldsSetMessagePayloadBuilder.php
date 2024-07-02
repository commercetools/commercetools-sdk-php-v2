<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPriceCustomFieldsSetMessagePayload>
 */
final class ProductPriceCustomFieldsSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $customField;

    /**

     * @var ?string
     */
    private $oldTypeId;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a> on which the Custom Type was set.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the Price belongs.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Custom Fields that were set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomField()
    {
        return $this->customField instanceof CustomFieldsBuilder ? $this->customField->build() : $this->customField;
    }

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getOldTypeId()
    {
        return $this->oldTypeId;
    }

    /**
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?CustomFields $customField
     * @return $this
     */
    public function withCustomField(?CustomFields $customField)
    {
        $this->customField = $customField;

        return $this;
    }

    /**
     * @param ?string $oldTypeId
     * @return $this
     */
    public function withOldTypeId(?string $oldTypeId)
    {
        $this->oldTypeId = $oldTypeId;

        return $this;
    }

    /**
     * @deprecated use withCustomField() instead
     * @return $this
     */
    public function withCustomFieldBuilder(?CustomFieldsBuilder $customField)
    {
        $this->customField = $customField;

        return $this;
    }

    public function build(): ProductPriceCustomFieldsSetMessagePayload
    {
        return new ProductPriceCustomFieldsSetMessagePayloadModel(
            $this->priceId,
            $this->variantId,
            $this->staged,
            $this->customField instanceof CustomFieldsBuilder ? $this->customField->build() : $this->customField,
            $this->oldTypeId
        );
    }

    public static function of(): ProductPriceCustomFieldsSetMessagePayloadBuilder
    {
        return new self();
    }
}
