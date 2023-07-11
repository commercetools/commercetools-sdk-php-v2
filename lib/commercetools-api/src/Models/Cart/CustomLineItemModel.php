<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
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
final class CustomLineItemModel extends JsonObjectModel implements CustomLineItem
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
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?TypedMoney
     */
    protected $money;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalPrice;

    /**
     *
     * @var ?string
     */
    protected $slug;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     *
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

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
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;

    /**
     *
     * @var ?string
     */
    protected $priceMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null,
        ?LocalizedString $name = null,
        ?TypedMoney $money = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?CentPrecisionMoney $totalPrice = null,
        ?string $slug = null,
        ?int $quantity = null,
        ?ItemStateCollection $state = null,
        ?TaxCategoryReference $taxCategory = null,
        ?TaxRate $taxRate = null,
        ?MethodTaxRateCollection $perMethodTaxRate = null,
        ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        ?CustomFields $custom = null,
        ?ItemShippingDetails $shippingDetails = null,
        ?string $priceMode = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->name = $name;
        $this->money = $money;
        $this->taxedPrice = $taxedPrice;
        $this->totalPrice = $totalPrice;
        $this->slug = $slug;
        $this->quantity = $quantity;
        $this->state = $state;
        $this->taxCategory = $taxCategory;
        $this->taxRate = $taxRate;
        $this->perMethodTaxRate = $perMethodTaxRate;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->custom = $custom;
        $this->shippingDetails = $shippingDetails;
        $this->priceMode = $priceMode;
    }

    /**
     * <p>Unique identifier of the Custom Line Item.</p>
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
     * <p>User-defined unique identifier of the Custom Line Item.</p>
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
     * <p>Name of the Custom Line Item.</p>
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
     * <p>Money value of the Custom Line Item.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }

            $this->money = TypedMoneyModel::of($data);
        }

        return $this->money;
    }

    /**
     * <p>Automatically set after the <code>taxRate</code> is set.</p>
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
     * <p>Total price of the Custom Line Item (<code>money</code> multiplied by <code>quantity</code>).
     * If the Custom Line Item is discounted, the total price is <code>discountedPricePerQuantity</code> multiplied by <code>quantity</code>.</p>
     * <p>Includes taxes if the <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code>.</p>
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
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item.
     * It matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *
     *
     * @return null|string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }
            $this->slug = (string) $data;
        }

        return $this->slug;
    }

    /**
     * <p>Number of Custom Line Items in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
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
     * <p>State of the Custom Line Item in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
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
     * <p>Used to select a Tax Rate when a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the <code>taxRate</code> of Custom Line Items is set automatically once a shipping address is set. The rate is based on the <a href="ctp:api:type:TaxCategory">TaxCategory</a> that applies for the shipping address.</li>
     * <li>For a Cart with <code>External</code> TaxMode, the <code>taxRate</code> of Custom Line Items can be set using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</li>
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
     * <p>Discounted price of a single quantity of the Custom Line Item.</p>
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
     * <p>Custom Fields of the Custom Line Item.</p>
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
     * <p>Container for Custom Line Item-specific addresses.</p>
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
     * <p>Indicates whether Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a> are applied to the Custom Line Item.</p>
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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?TypedMoney $money
     */
    public function setMoney(?TypedMoney $money): void
    {
        $this->money = $money;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
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
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
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
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void
    {
        $this->priceMode = $priceMode;
    }
}
