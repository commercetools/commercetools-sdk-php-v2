<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
     * @var ?string
     */
    protected $id;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?TypedMoney
     */
    protected $money;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     * @var ?string
     */
    protected $slug;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?LocalizedString $name = null,
        ?TypedMoney $money = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?TypedMoney $totalPrice = null,
        ?string $slug = null,
        ?int $quantity = null,
        ?ItemStateCollection $state = null,
        ?TaxCategoryReference $taxCategory = null,
        ?TaxRate $taxRate = null,
        ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        ?CustomFields $custom = null,
        ?ItemShippingDetails $shippingDetails = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->money = $money;
        $this->taxedPrice = $taxedPrice;
        $this->totalPrice = $totalPrice;
        $this->slug = $slug;
        $this->quantity = $quantity;
        $this->state = $state;
        $this->taxCategory = $taxCategory;
        $this->taxRate = $taxRate;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->custom = $custom;
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * <p>The unique ID of this CustomLineItem.</p>
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
     * <p>The name of this CustomLineItem.</p>
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
     * <p>The cost to add to the cart.
     * The amount can be negative.</p>
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
     * <p>The total price of this custom line item.
     * If custom line item is discounted, then the <code>totalPrice</code> would be the discounted custom line item price multiplied by <code>quantity</code>.
     * Otherwise a total price is just a <code>money</code> multiplied by the <code>quantity</code>.
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
     * <p>A unique String in the cart to identify this CustomLineItem.</p>
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
     * <p>The amount of a CustomLineItem in the cart.
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
     * <p>Container for custom line item specific address(es).
     * CustomLineItem fields that can be used in query predicates: <code>slug</code>, <code>name</code>, <code>quantity</code>,
     * <code>money</code>, <code>state</code>, <code>discountedPricePerQuantity</code>.</p>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void
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
}
