<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPriceCustomFieldsSetMessagePayloadModel extends JsonObjectModel implements ProductPriceCustomFieldsSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPriceCustomFieldsSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $priceId;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?CustomFields
     */
    protected $customField;

    /**
     *
     * @var ?string
     */
    protected $oldTypeId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $priceId = null,
        ?int $variantId = null,
        ?bool $staged = null,
        ?CustomFields $customField = null,
        ?string $oldTypeId = null,
        ?string $type = null
    ) {
        $this->priceId = $priceId;
        $this->variantId = $variantId;
        $this->staged = $staged;
        $this->customField = $customField;
        $this->oldTypeId = $oldTypeId;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a> on which the Custom Type was set.</p>
     *
     *
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the Price belongs.</p>
     *
     *
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Custom Fields that were set.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustomField()
    {
        if (is_null($this->customField)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM_FIELD);
            if (is_null($data)) {
                return null;
            }

            $this->customField = CustomFieldsModel::of($data);
        }

        return $this->customField;
    }

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *
     *
     * @return null|string
     */
    public function getOldTypeId()
    {
        if (is_null($this->oldTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->oldTypeId = (string) $data;
        }

        return $this->oldTypeId;
    }


    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?CustomFields $customField
     */
    public function setCustomField(?CustomFields $customField): void
    {
        $this->customField = $customField;
    }

    /**
     * @param ?string $oldTypeId
     */
    public function setOldTypeId(?string $oldTypeId): void
    {
        $this->oldTypeId = $oldTypeId;
    }
}
