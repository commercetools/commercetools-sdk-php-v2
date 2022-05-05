<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceModel;
use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Category\CategoryReferenceModel;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\CustomObject\CustomObjectReference;
use Commercetools\Api\Models\CustomObject\CustomObjectReferenceModel;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Api\Models\Inventory\InventoryEntryReference;
use Commercetools\Api\Models\Inventory\InventoryEntryReferenceModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceModel;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceModel;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceModel;
use Commercetools\Api\Models\ProductSelection\ProductSelectionReference;
use Commercetools\Api\Models\ProductSelection\ProductSelectionReferenceModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Review\ReviewReference;
use Commercetools\Api\Models\Review\ReviewReferenceModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListReference;
use Commercetools\Api\Models\ShoppingList\ShoppingListReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreReference;
use Commercetools\Api\Models\Store\StoreReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\Type\TypeReference;
use Commercetools\Api\Models\Type\TypeReferenceModel;
use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReferenceModel extends JsonObjectModel implements Reference
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @psalm-var array<string, class-string<Reference> >
     *
     */
    private static $discriminatorClasses = [
       'cart' => CartReferenceModel::class,
       'cart-discount' => CartDiscountReferenceModel::class,
       'category' => CategoryReferenceModel::class,
       'channel' => ChannelReferenceModel::class,
       'customer' => CustomerReferenceModel::class,
       'customer-group' => CustomerGroupReferenceModel::class,
       'discount-code' => DiscountCodeReferenceModel::class,
       'inventory-entry' => InventoryEntryReferenceModel::class,
       'key-value-document' => CustomObjectReferenceModel::class,
       'order' => OrderReferenceModel::class,
       'order-edit' => OrderEditReferenceModel::class,
       'payment' => PaymentReferenceModel::class,
       'product' => ProductReferenceModel::class,
       'product-discount' => ProductDiscountReferenceModel::class,
       'product-selection' => ProductSelectionReferenceModel::class,
       'product-type' => ProductTypeReferenceModel::class,
       'review' => ReviewReferenceModel::class,
       'shipping-method' => ShippingMethodReferenceModel::class,
       'shopping-list' => ShoppingListReferenceModel::class,
       'state' => StateReferenceModel::class,
       'store' => StoreReferenceModel::class,
       'tax-category' => TaxCategoryReferenceModel::class,
       'type' => TypeReferenceModel::class,
       'zone' => ZoneReferenceModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null
    ) {
        $this->id = $id;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of referenced resource.</p>
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
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }



    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Reference>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Reference::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<Reference> */
        $type = ReferenceModel::class;
        return $type;
    }
}
