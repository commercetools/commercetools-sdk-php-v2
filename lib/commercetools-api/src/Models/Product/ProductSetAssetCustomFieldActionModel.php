<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetAssetCustomFieldActionModel extends JsonObjectModel implements ProductSetAssetCustomFieldAction
{
    public const DISCRIMINATOR_VALUE = 'setAssetCustomField';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?string
     */
    protected $assetId;

    /**
     * @var ?string
     */
    protected $assetKey;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?mixed
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?string $sku = null,
        ?bool $staged = null,
        ?string $assetId = null,
        ?string $assetKey = null,
        ?string $name = null,
        $value = null
    ) {
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->staged = $staged;
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->name = $name;
        $this->value = $value;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
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
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
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
     * @return null|string
     */
    public function getAssetId()
    {
        if (is_null($this->assetId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSET_ID);
            if (is_null($data)) {
                return null;
            }
            $this->assetId = (string) $data;
        }

        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSET_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->assetKey = (string) $data;
        }

        return $this->assetKey;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>The value of a Custom Field.
     * The data type of the value depends on the specific <a href="/projects/types#fieldtype">FieldType</a> given in the <code>type</code> field of the <a href="/ctp:api:type:FieldDefinition">FieldDefinition</a> for a Custom Field.
     * It can be any of the following:</p>
     * <p>| Field type                                                 | Data type                                                                                                                                                                 |
     * | ---------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     * | <a href="ctp:api:type:CustomFieldBooleanType">CustomFieldBooleanType</a>                 | Boolean (<code>true</code> or <code>false</code>)                                                                                                                                                     |
     * | <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a>                   | String                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a> | <a href="ctp:api:type:LocalizedString">LocalizedString</a>                                                                                                                             |
     * | <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>                       | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldEnumValue">EnumValues</a> defined in the <a href="ctp:api:type:CustomFiedEnumType">EnumType</a>                                     |
     * | <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>     | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldLocalizedEnumValue">LocalizedEnumValues</a> defined in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">LocalizedEnumType</a> |
     * | <a href="ctp:api:type:CustomFieldNumberType">CustomFieldNumberType</a>                   | Number                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldMoneyType">CustomFieldMoneyType</a>                     | <a href="/../api/types#centprecisionmoney">CentPrecisionMoney</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldDateType">CustomFieldDateType</a>                       | <a href="ctp:api:type:Date">Date</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldTimeType">CustomFieldTimeType</a>                       | <a href="ctp:api:type:Time">Time</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldDateTimeType">CustomFieldDateTimeType</a>               | <a href="ctp:api:type:DateTime">DateTime</a>                                                                                                                                           |
     * | <a href="ctp:api:type:CustomFieldReferenceType">CustomFieldReferenceType</a>             | <a href="/../api/types#reference">Reference</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldSetType">CustomFieldSetType</a>                         | JSON array without duplicates consisting of <a href="ctp:api:type:CustomFieldValue">CustomFieldValues</a> of a single <a href="ctp:api:type:FieldType">FieldType</a>. For example, a Custom Field of SetType of DateType takes a JSON array of mutually different Dates for its value. The order of items in the array is not fixed. For more examples, see the <a href="ctp:api:type:FieldContainer">example FieldContainer</a>.|</p>
     *
     * @return null|mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }


    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void
    {
        $this->assetId = $assetId;
    }

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }
}
