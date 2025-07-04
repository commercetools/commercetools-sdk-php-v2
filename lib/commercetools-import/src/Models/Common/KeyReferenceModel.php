<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class KeyReferenceModel extends JsonObjectModel implements KeyReference
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     * @psalm-var array<string, class-string<KeyReference> >
     *
     */
    private static $discriminatorClasses = [
       'cart' => CartKeyReferenceModel::class,
       'cart-discount' => CartDiscountKeyReferenceModel::class,
       'category' => CategoryKeyReferenceModel::class,
       'channel' => ChannelKeyReferenceModel::class,
       'customer' => CustomerKeyReferenceModel::class,
       'customer-group' => CustomerGroupKeyReferenceModel::class,
       'discount-code' => DiscountCodeKeyReferenceModel::class,
       'key-value-document' => CustomObjectKeyReferenceModel::class,
       'order' => OrderKeyReferenceModel::class,
       'payment' => PaymentKeyReferenceModel::class,
       'price' => PriceKeyReferenceModel::class,
       'product' => ProductKeyReferenceModel::class,
       'product-discount' => ProductDiscountKeyReferenceModel::class,
       'product-type' => ProductTypeKeyReferenceModel::class,
       'product-variant' => ProductVariantKeyReferenceModel::class,
       'shipping-method' => ShippingMethodKeyReferenceModel::class,
       'state' => StateKeyReferenceModel::class,
       'store' => StoreKeyReferenceModel::class,
       'tax-category' => TaxCategoryKeyReferenceModel::class,
       'type' => TypeKeyReferenceModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $typeId = null
    ) {
        $this->key = $key;
        $this->typeId = $typeId;
    }

    /**
     * <p>User-defined unique identifier of the referenced resource.
     * If the referenced resource does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced resource is created.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Type of referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }



    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<KeyReference>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = KeyReference::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<KeyReference> */
        $type = KeyReferenceModel::class;
        return $type;
    }
}
