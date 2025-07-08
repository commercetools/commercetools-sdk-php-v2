<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceModel;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyModel;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateModel;
use stdClass;

/**
 * @internal
 */
final class CustomLineItemDraftModel extends JsonObjectModel implements CustomLineItemDraft
{
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
     * @var ?CustomLineItemTaxedPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?TypedMoney
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
     * @var ?TaxCategoryKeyReference
     */
    protected $taxCategory;

    /**
     *
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     *
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;

    /**
     *
     * @var ?DiscountedLineItemPriceDraftCollection
     */
    protected $discountedPricePerQuantity;

    /**
     *
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?TypedMoney $money = null,
        ?CustomLineItemTaxedPrice $taxedPrice = null,
        ?TypedMoney $totalPrice = null,
        ?string $slug = null,
        ?int $quantity = null,
        ?ItemStateCollection $state = null,
        ?TaxCategoryKeyReference $taxCategory = null,
        ?TaxRate $taxRate = null,
        ?ExternalTaxRateDraft $externalTaxRate = null,
        ?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity = null,
        ?ItemShippingDetailsDraft $shippingDetails = null
    ) {
        $this->name = $name;
        $this->money = $money;
        $this->taxedPrice = $taxedPrice;
        $this->totalPrice = $totalPrice;
        $this->slug = $slug;
        $this->quantity = $quantity;
        $this->state = $state;
        $this->taxCategory = $taxCategory;
        $this->taxRate = $taxRate;
        $this->externalTaxRate = $externalTaxRate;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * <p>Maps to <code>CustomLineItem.name</code>.</p>
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
     * <p>Maps to <code>CustomLineItem.money</code>.</p>
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
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->money = $className::of($data);
        }

        return $this->money;
    }

    /**
     * <p>Maps to <code>CustomLineItem.taxedPrice</code>.</p>
     *
     *
     * @return null|CustomLineItemTaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = CustomLineItemTaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Maps to <code>CustomLineItem.totalPrice</code>.</p>
     *
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
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalPrice = $className::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>Maps to <code>CustomLineItem.slug</code>.</p>
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
     * <p>Maps to <code>CustomLineItem.quantity</code>.</p>
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
     * <p>Maps to <code>CustomLineItem.state</code>.</p>
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
     * <p>Maps to <code>CustomLineItem.taxCategory</code>. References a tax category by key. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryKeyReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>Maps to <code>CustomLineItem.taxRate</code>.</p>
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
     * <p>External Tax Rate for the Custom Line Item if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    /**
     * <p>Maps to <code>CustomLineItem.discountedPricePerQuantity</code>.</p>
     *
     *
     * @return null|DiscountedLineItemPriceDraftCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedPricePerQuantity = DiscountedLineItemPriceDraftCollection::fromArray($data);
        }

        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Maps to <code>CustomLineItem.shippingDetails</code>.</p>
     *
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
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
     * @param ?CustomLineItemTaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?CustomLineItemTaxedPrice $taxedPrice): void
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
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void
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
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }

    /**
     * @param ?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
}
