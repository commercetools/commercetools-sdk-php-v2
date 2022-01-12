<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
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
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $productId;

    /**
     * @var ?string
     */
    protected $productKey;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $productSlug;

    /**
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     * @var ?ProductVariant
     */
    protected $variant;

    /**
     * @var ?Price
     */
    protected $price;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;

    /**
     * @var ?ChannelReference
     */
    protected $distributionChannel;

    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     * @var ?string
     */
    protected $priceMode;

    /**
     * @var ?string
     */
    protected $lineItemMode;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $productId = null,
        ?string $productKey = null,
        ?LocalizedString $name = null,
        ?LocalizedString $productSlug = null,
        ?ProductTypeReference $productType = null,
        ?ProductVariant $variant = null,
        ?Price $price = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?TypedMoney $totalPrice = null,
        ?int $quantity = null,
        ?DateTimeImmutable $addedAt = null,
        ?ItemStateCollection $state = null,
        ?TaxRate $taxRate = null,
        ?ChannelReference $supplyChannel = null,
        ?ChannelReference $distributionChannel = null,
        ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        ?string $priceMode = null,
        ?string $lineItemMode = null,
        ?CustomFields $custom = null,
        ?ItemShippingDetails $shippingDetails = null,
        ?DateTimeImmutable $lastModifiedAt = null
    ) {
        $this->id = $id;
        $this->productId = $productId;
        $this->productKey = $productKey;
        $this->name = $name;
        $this->productSlug = $productSlug;
        $this->productType = $productType;
        $this->variant = $variant;
        $this->price = $price;
        $this->taxedPrice = $taxedPrice;
        $this->totalPrice = $totalPrice;
        $this->quantity = $quantity;
        $this->addedAt = $addedAt;
        $this->state = $state;
        $this->taxRate = $taxRate;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->priceMode = $priceMode;
        $this->lineItemMode = $lineItemMode;
        $this->custom = $custom;
        $this->shippingDetails = $shippingDetails;
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * <p>The unique ID of this LineItem.</p>
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
     * <p>User-defined unique identifier for the <a href="ctp:api:type:Product">Product</a>.
     * Only present on Line Items in a <a href="ctp:api:type:Cart">Cart</a> when the <code>key</code> is available on that specific Product at the time the Line Item is created or updated on the Cart. On <a href="/ctp:api:type:Order">Order</a> resources this field is only present when the <code>key</code> is available on the specific Product at the time the Order is created from the Cart. This field is in general not present on Carts that had no updates until 3 December 2021 and on Orders created before this date.</p>
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
     * <p>The product name.</p>
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
     * <p>The slug of a product is inserted on the fly.
     * It is always up-to-date and can therefore be used to link to the product detail page of the product.
     * It is empty if the product has been deleted.
     * The slug is also empty if the cart or order is retrieved via Reference Expansion or is a snapshot in a Message.</p>
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
     * <p>The variant data is saved when the variant is added to the cart, and not updated automatically.
     * It can manually be updated with the Recalculate update action.</p>
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
     * <p>The price of a line item is selected from the prices array of the product variant.
     * If the <code>variant</code> field hasn't been updated, the price may not correspond to a price in <code>variant.prices</code>.</p>
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
     * <p>Set once the <code>taxRate</code> is set.</p>
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
     * <p>The total price of this line item.
     * If the line item is discounted, then the <code>totalPrice</code> is the DiscountedLineItemPriceForQuantity multiplied by <code>quantity</code>.
     * Otherwise the total price is the product price multiplied by the <code>quantity</code>.
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = TypedMoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>The amount of a LineItem in the cart.
     * Must be a positive integer.</p>
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
     * <p>When the line item was added to the cart. Optional for backwards
     * compatibility reasons only.</p>
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
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
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
     * <p>The supply channel identifies the inventory entries that should be reserved.
     * The channel has
     * the role InventorySupply.</p>
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
     * <p>The distribution channel is used to select a ProductPrice.
     * The channel has the role ProductDistribution.</p>
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
     * <p>Container for line item specific address(es).</p>
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
     * <p>The date when the LineItem was last modified by one of the following actions
     * setLineItemShippingDetails, addLineItem, removeLineItem, or changeLineItemQuantity.
     * Optional only for backwards compatible reasons. When the LineItem is created lastModifiedAt is set to addedAt.</p>
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
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
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
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?ItemShippingDetails $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
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
