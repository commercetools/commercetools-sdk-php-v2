<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class LineItemModel extends JsonObjectModel implements LineItem
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $productId;

    /**
     *
     * @var ?string
     */
    protected $productKey;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $productSlug;

    /**
     *
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @var ?ProductVariant
     */
    protected $variant;

    /**
     *
     * @var ?Price
     */
    protected $price;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalPrice;

    /**
     *
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?MethodTaxedPriceCollection
     */
    protected $taxedPricePortions;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     *
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     *
     * @var ?MethodTaxRateCollection
     */
    protected $perMethodTaxRate;

    /**
     *
     * @var ?ChannelReference
     */
    protected $supplyChannel;

    /**
     *
     * @var ?ChannelReference
     */
    protected $distributionChannel;

    /**
     *
     * @var ?string
     */
    protected $priceMode;

    /**
     *
     * @var ?string
     */
    protected $lineItemMode;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null,
        ?string $productId = null,
        ?string $productKey = null,
        ?LocalizedString $name = null,
        ?LocalizedString $productSlug = null,
        ?ProductTypeReference $productType = null,
        ?ProductVariant $variant = null,
        ?Price $price = null,
        ?int $quantity = null,
        ?CentPrecisionMoney $totalPrice = null,
        ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?MethodTaxedPriceCollection $taxedPricePortions = null,
        ?ItemStateCollection $state = null,
        ?TaxRate $taxRate = null,
        ?MethodTaxRateCollection $perMethodTaxRate = null,
        ?ChannelReference $supplyChannel = null,
        ?ChannelReference $distributionChannel = null,
        ?string $priceMode = null,
        ?string $lineItemMode = null,
        ?string $inventoryMode = null,
        ?ItemShippingDetails $shippingDetails = null,
        ?CustomFields $custom = null,
        ?DateTimeImmutable $addedAt = null,
        ?DateTimeImmutable $lastModifiedAt = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->productId = $productId;
        $this->productKey = $productKey;
        $this->name = $name;
        $this->productSlug = $productSlug;
        $this->productType = $productType;
        $this->variant = $variant;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->taxedPrice = $taxedPrice;
        $this->taxedPricePortions = $taxedPricePortions;
        $this->state = $state;
        $this->taxRate = $taxRate;
        $this->perMethodTaxRate = $perMethodTaxRate;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->priceMode = $priceMode;
        $this->lineItemMode = $lineItemMode;
        $this->inventoryMode = $inventoryMode;
        $this->shippingDetails = $shippingDetails;
        $this->custom = $custom;
        $this->addedAt = $addedAt;
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * <p>Unique identifier of the LineItem.</p>
     *
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
     * <p>User-defined unique identifier of the LineItem.</p>
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
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *
     *
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Product">Product</a>.</p>
     * <p>This field is only present on:</p>
     * <ul>
     * <li>Line Items in a <a href="ctp:api:type:Cart">Cart</a> when the <code>key</code> is available on that specific Product at the time the LineItem was created or updated on the Cart.</li>
     * <li>Line Items in an <a href="ctp:api:type:Order">Order</a> when the <code>key</code> is available on the specific Product at the time the Order was created from the Cart.</li>
     * </ul>
     * <p>Present on resources created or updated after 3 December 2021.</p>
     *
     *
     * @return null|string
     */
    public function getProductKey()
    {
        if (is_null($this->productKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->productKey = (string) $data;
        }

        return $this->productKey;
    }

    /**
     * <p>Name of the Product.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p><code>slug</code> of the current version of the Product. Updated automatically if the <code>slug</code> changes. Empty if the Product has been deleted.
     * The <code>productSlug</code> field of LineItem is not expanded when using <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getProductSlug()
    {
        if (is_null($this->productSlug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->productSlug = LocalizedStringModel::of($data);
        }

        return $this->productSlug;
    }

    /**
     * <p>Product Type of the Product.</p>
     *
     *
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * <p>Holds the data of the Product Variant added to the Cart.</p>
     * <p>The data is saved at the time the Product Variant is added to the Cart and is not updated automatically when Product Variant data changes.
     * Must be updated using the <a href="ctp:api:type:CartRecalculateAction">Recalculate</a> update action.</p>
     *
     *
     * @return null|ProductVariant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant = ProductVariantModel::of($data);
        }

        return $this->variant;
    }

    /**
     * <p>Price of a Line Item selected from the Product Variant according to the <a href="ctp:api:type:Product">Product</a> <code>priceMode</code>. If the <code>priceMode</code> is <code>Embedded</code> <a href="ctp:api:type:ProductPriceModeEnum">ProductPriceMode</a> and the <code>variant</code> field hasn't been updated, the price may not correspond to a price in <code>variant.prices</code>.</p>
     *
     *
     * @return null|Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Number of Line Items of the given Product Variant present in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>Total price of this Line Item equalling <code>price</code> multiplied by <code>quantity</code>. If the Line Item is discounted, the total price is the <code>discountedPricePerQuantity</code> multiplied by <code>quantity</code>.
     * Includes taxes if the <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code>.</p>
     * <p>If <code>ExternalPrice</code> <a href="#ctp:api:type:LineItemPriceMode">LineItemPriceMode</a> is used with high-precision money, then the total price is rounded by using the <code>HalfEven</code> rounding mode.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = CentPrecisionMoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>Discounted price of a single quantity of the Line Item.</p>
     *
     *
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
        }

        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Automatically set after <code>taxRate</code> is set.</p>
     *
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Total taxed prices based on the quantity of Line Item assigned to each <a href="ctp:api:type:ShippingMethod">Shipping Method</a>. Only applicable for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set after <code>perMethodTaxRate</code> is set.</p>
     *
     *
     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions()
    {
        if (is_null($this->taxedPricePortions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxedPricePortions = MethodTaxedPriceCollection::fromArray($data);
        }

        return $this->taxedPricePortions;
    }

    /**
     * <p>Tracks specific quantities of the Line Item within a given State. When a Line Item is added to a Cart, its full quantity is set to the built-in &quot;Initial&quot; state. State transitions for Line Items are managed on the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = ItemStateCollection::fromArray($data);
        }

        return $this->state;
    }

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the <code>taxRate</code> of Line Items is set automatically once a shipping address is set. The rate is based on the <a href="ctp:api:type:TaxCategory">TaxCategory</a> that applies for the shipping address.</li>
     * <li>For a Cart with <code>External</code> TaxMode, the <code>taxRate</code> of Line Items can be set using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</li>
     * </ul>
     *
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }

    /**
     * <p>Tax Rate per Shipping Method for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a> it is automatically set after the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.
     * For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the Tax Rate must be set with <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *
     *
     * @return null|MethodTaxRateCollection
     */
    public function getPerMethodTaxRate()
    {
        if (is_null($this->perMethodTaxRate)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PER_METHOD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }
            $this->perMethodTaxRate = MethodTaxRateCollection::fromArray($data);
        }

        return $this->perMethodTaxRate;
    }

    /**
     * <p>Identifies <a href="/../api/projects/inventory">Inventory entries</a> that are reserved. The referenced Channel has the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *
     *
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * <p>Used to <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">select</a> a Product Price. The referenced Channel has the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *
     *
     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelReferenceModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * <p>Indicates how the Price for the Line Item is set.</p>
     *
     *
     * @return null|string
     */
    public function getPriceMode()
    {
        if (is_null($this->priceMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceMode = (string) $data;
        }

        return $this->priceMode;
    }

    /**
     * <p>Indicates how the Line Item is added to the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemMode()
    {
        if (is_null($this->lineItemMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemMode = (string) $data;
        }

        return $this->lineItemMode;
    }

    /**
     * <p>Inventory mode specific to this Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Only present if the inventory mode is different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *
     *
     * @return null|ItemShippingDetails
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsModel::of($data);
        }

        return $this->shippingDetails;
    }

    /**
     * <p>Custom Fields of the Line Item.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Date and time (UTC) the Line Item was added to the Cart.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->addedAt = $data;
        }

        return $this->addedAt;
    }

    /**
     * <p>Date and time (UTC) the Line Item was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
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
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void
    {
        $this->productKey = $productKey;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $productSlug
     */
    public function setProductSlug(?LocalizedString $productSlug): void
    {
        $this->productSlug = $productSlug;
    }

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     */
    public function setTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions): void
    {
        $this->taxedPricePortions = $taxedPricePortions;
    }

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @param ?MethodTaxRateCollection $perMethodTaxRate
     */
    public function setPerMethodTaxRate(?MethodTaxRateCollection $perMethodTaxRate): void
    {
        $this->perMethodTaxRate = $perMethodTaxRate;
    }

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void
    {
        $this->priceMode = $priceMode;
    }

    /**
     * @param ?string $lineItemMode
     */
    public function setLineItemMode(?string $lineItemMode): void
    {
        $this->lineItemMode = $lineItemMode;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?ItemShippingDetails $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[LineItem::FIELD_ADDED_AT]) && $data[LineItem::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[LineItem::FIELD_ADDED_AT] = $data[LineItem::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[LineItem::FIELD_LAST_MODIFIED_AT]) && $data[LineItem::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[LineItem::FIELD_LAST_MODIFIED_AT] = $data[LineItem::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
