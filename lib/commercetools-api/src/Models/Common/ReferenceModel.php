<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceModel;
use Commercetools\Api\Models\Category\CategoryReferenceModel;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\CustomObject\CustomObjectReferenceModel;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Api\Models\Inventory\InventoryEntryReferenceModel;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceModel;
use Commercetools\Api\Models\Payment\PaymentReferenceModel;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceModel;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Review\ReviewReferenceModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListReferenceModel;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\Type\TypeReferenceModel;
use Commercetools\Api\Models\Zone\ZoneReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReferenceModel extends JsonObjectModel implements Reference
{
    const DISCRIMINATOR_VALUE = '';

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
     */
    private static $discriminatorClasses = [
        'key-value-document' => CustomObjectReferenceModel::class,
        'customer-group' => CustomerGroupReferenceModel::class,
        'customer' => CustomerReferenceModel::class,
        'discount-code' => DiscountCodeReferenceModel::class,
        'inventory-entry' => InventoryEntryReferenceModel::class,
        'order-edit' => OrderEditReferenceModel::class,
        'order' => OrderReferenceModel::class,
        'payment' => PaymentReferenceModel::class,
        'product-discount' => ProductDiscountReferenceModel::class,
        'product-type' => ProductTypeReferenceModel::class,
        'product' => ProductReferenceModel::class,
        'review' => ReviewReferenceModel::class,
        'shipping-method' => ShippingMethodReferenceModel::class,
        'shopping-list' => ShoppingListReferenceModel::class,
        'state' => StateReferenceModel::class,
        'store' => StoreReferenceModel::class,
        'tax-category' => TaxCategoryReferenceModel::class,
        'type' => TypeReferenceModel::class,
        'zone' => ZoneReferenceModel::class,
        'cart-discount' => CartDiscountReferenceModel::class,
        'cart' => CartReferenceModel::class,
        'category' => CategoryReferenceModel::class,
        'channel' => ChannelReferenceModel::class,
    ];

    public function __construct(
        string $id = null
    ) {
        $this->id = $id;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Reference>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Reference::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<Reference> */
        $type = ReferenceModel::class;

        return $type;
    }
}
