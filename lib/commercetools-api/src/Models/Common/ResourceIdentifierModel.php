<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierModel;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\DiscountCode\DiscountCodeResourceIdentifierModel;
use Commercetools\Api\Models\Inventory\InventoryEntryResourceIdentifierModel;
use Commercetools\Api\Models\Order\OrderResourceIdentifierModel;
use Commercetools\Api\Models\OrderEdit\OrderEditResourceIdentifierModel;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierModel;
use Commercetools\Api\Models\Product\ProductResourceIdentifierModel;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountResourceIdentifierModel;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierModel;
use Commercetools\Api\Models\Review\ReviewResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ResourceIdentifierModel extends JsonObjectModel implements ResourceIdentifier
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
     * @var ?string
     */
    protected $key;

    /**
     * @psalm-var array<string, class-string<ResourceIdentifier> >
     */
    private static $discriminatorClasses = [
        'customer-group' => CustomerGroupResourceIdentifierModel::class,
        'customer' => CustomerResourceIdentifierModel::class,
        'discount-code' => DiscountCodeResourceIdentifierModel::class,
        'inventory-entry' => InventoryEntryResourceIdentifierModel::class,
        'order-edit' => OrderEditResourceIdentifierModel::class,
        'order' => OrderResourceIdentifierModel::class,
        'payment' => PaymentResourceIdentifierModel::class,
        'product-discount' => ProductDiscountResourceIdentifierModel::class,
        'product-type' => ProductTypeResourceIdentifierModel::class,
        'product' => ProductResourceIdentifierModel::class,
        'review' => ReviewResourceIdentifierModel::class,
        'shipping-method' => ShippingMethodResourceIdentifierModel::class,
        'shopping-list' => ShoppingListResourceIdentifierModel::class,
        'state' => StateResourceIdentifierModel::class,
        'store' => StoreResourceIdentifierModel::class,
        'tax-category' => TaxCategoryResourceIdentifierModel::class,
        'type' => TypeResourceIdentifierModel::class,
        'zone' => ZoneResourceIdentifierModel::class,
        'cart-discount' => CartDiscountResourceIdentifierModel::class,
        'cart' => CartResourceIdentifierModel::class,
        'category' => CategoryResourceIdentifierModel::class,
        'channel' => ChannelResourceIdentifierModel::class,
    ];

    public function __construct(
        string $id = null,
        string $key = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ResourceIdentifier::FIELD_TYPE_ID);
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
            $data = $this->raw(ResourceIdentifier::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ResourceIdentifier::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ResourceIdentifier>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ResourceIdentifier::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ResourceIdentifier> */
        $type = ResourceIdentifierModel::class;

        return $type;
    }
}
