<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingInfoImportDraftModel extends JsonObjectModel implements ShippingInfoImportDraft
{
    /**
     *
     * @var ?string
     */
    protected $shippingMethodName;

    /**
     *
     * @var ?Money
     */
    protected $price;

    /**
     *
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     *
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     *
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     *
     * @var ?DeliveryDraftCollection
     */
    protected $deliveries;

    /**
     *
     * @var ?DiscountedLineItemPriceDraft
     */
    protected $discountedPrice;

    /**
     *
     * @var ?string
     */
    protected $shippingMethodState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingMethodName = null,
        ?Money $price = null,
        ?ShippingRateDraft $shippingRate = null,
        ?TaxRate $taxRate = null,
        ?TaxCategoryResourceIdentifier $taxCategory = null,
        ?ShippingMethodResourceIdentifier $shippingMethod = null,
        ?DeliveryDraftCollection $deliveries = null,
        ?DiscountedLineItemPriceDraft $discountedPrice = null,
        ?string $shippingMethodState = null
    ) {
        $this->shippingMethodName = $shippingMethodName;
        $this->price = $price;
        $this->shippingRate = $shippingRate;
        $this->taxRate = $taxRate;
        $this->taxCategory = $taxCategory;
        $this->shippingMethod = $shippingMethod;
        $this->deliveries = $deliveries;
        $this->discountedPrice = $discountedPrice;
        $this->shippingMethodState = $shippingMethodState;
    }

    /**
     *
     * @return null|string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodName = (string) $data;
        }

        return $this->shippingMethodName;
    }

    /**
     *
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>The shipping rate used to determine the price.</p>
     *
     *
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
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
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>Not set if custom shipping method is used.</p>
     *
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>
     *
     *
     * @return null|DeliveryDraftCollection
     */
    public function getDeliveries()
    {
        if (is_null($this->deliveries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DELIVERIES);
            if (is_null($data)) {
                return null;
            }
            $this->deliveries = DeliveryDraftCollection::fromArray($data);
        }

        return $this->deliveries;
    }

    /**
     *
     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->discountedPrice = DiscountedLineItemPriceDraftModel::of($data);
        }

        return $this->discountedPrice;
    }

    /**
     * <p>Indicates whether the ShippingMethod referenced is allowed for the cart or not.</p>
     *
     *
     * @return null|string
     */
    public function getShippingMethodState()
    {
        if (is_null($this->shippingMethodState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodState = (string) $data;
        }

        return $this->shippingMethodState;
    }


    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?DeliveryDraftCollection $deliveries
     */
    public function setDeliveries(?DeliveryDraftCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }

    /**
     * @param ?DiscountedLineItemPriceDraft $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }

    /**
     * @param ?string $shippingMethodState
     */
    public function setShippingMethodState(?string $shippingMethodState): void
    {
        $this->shippingMethodState = $shippingMethodState;
    }
}
