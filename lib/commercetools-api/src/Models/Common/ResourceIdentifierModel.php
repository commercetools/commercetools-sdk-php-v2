<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifier;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierModel;
use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\DiscountCode\DiscountCodeResourceIdentifier;
use Commercetools\Api\Models\DiscountCode\DiscountCodeResourceIdentifierModel;
use Commercetools\Api\Models\Inventory\InventoryEntryResourceIdentifier;
use Commercetools\Api\Models\Inventory\InventoryEntryResourceIdentifierModel;
use Commercetools\Api\Models\Order\OrderResourceIdentifier;
use Commercetools\Api\Models\Order\OrderResourceIdentifierModel;
use Commercetools\Api\Models\OrderEdit\OrderEditResourceIdentifier;
use Commercetools\Api\Models\OrderEdit\OrderEditResourceIdentifierModel;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierModel;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierModel;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountResourceIdentifier;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountResourceIdentifierModel;
use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifier;
use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifierModel;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierModel;
use Commercetools\Api\Models\Review\ReviewResourceIdentifier;
use Commercetools\Api\Models\Review\ReviewResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ResourceIdentifierModel extends JsonObjectModel implements ResourceIdentifier
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
     * @var ?string
     */
    protected $key;

    /**
     * @psalm-var array<string, class-string<ResourceIdentifier> >
     *
     */
    private static $discriminatorClasses = [
       'cart' => CartResourceIdentifierModel::class,
       'cart-discount' => CartDiscountResourceIdentifierModel::class,
       'category' => CategoryResourceIdentifierModel::class,
       'channel' => ChannelResourceIdentifierModel::class,
       'customer' => CustomerResourceIdentifierModel::class,
       'customer-group' => CustomerGroupResourceIdentifierModel::class,
       'discount-code' => DiscountCodeResourceIdentifierModel::class,
       'inventory-entry' => InventoryEntryResourceIdentifierModel::class,
       'order' => OrderResourceIdentifierModel::class,
       'order-edit' => OrderEditResourceIdentifierModel::class,
       'payment' => PaymentResourceIdentifierModel::class,
       'product' => ProductResourceIdentifierModel::class,
       'product-discount' => ProductDiscountResourceIdentifierModel::class,
       'product-selection' => ProductSelectionResourceIdentifierModel::class,
       'product-type' => ProductTypeResourceIdentifierModel::class,
       'review' => ReviewResourceIdentifierModel::class,
       'shipping-method' => ShippingMethodResourceIdentifierModel::class,
       'shopping-list' => ShoppingListResourceIdentifierModel::class,
       'state' => StateResourceIdentifierModel::class,
       'store' => StoreResourceIdentifierModel::class,
       'tax-category' => TaxCategoryResourceIdentifierModel::class,
       'type' => TypeResourceIdentifierModel::class,
       'zone' => ZoneResourceIdentifierModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of referenced resource. If given, it must match the expected <a href="#referencetypeid">ReferenceTypeId</a> of the referenced resource.</p>
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
     * <p>Platform-generated unique identifier of the referenced resource. Required if <code>key</code> is absent.</p>
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
     * <p>User-defined unique identifier of the referenced resource. Required if <code>id</code> is absent.</p>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
     * @psalm-return class-string<ResourceIdentifier>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ResourceIdentifier::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ResourceIdentifier> */
        $type = ResourceIdentifierModel::class;
        return $type;
    }
}
