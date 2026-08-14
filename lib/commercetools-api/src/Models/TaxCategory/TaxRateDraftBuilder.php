<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxRateDraft>
 */
final class TaxRateDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?float
     */
    private $amount;

    /**

     * @var ?bool
     */
    private $includedInPrice;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $state;

    /**

     * @var ?SubRateCollection
     */
    private $subRates;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Name of the TaxRate.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Tax rate.</p>
     * <p>Either <code>amount</code> or <code>subRates</code> must be defined. If both are defined, the value of this field must be equal to the sum of the <code>subRates</code> amounts; otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <p>Whether tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> or <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>, and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
     *

     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        return $this->includedInPrice;
    }

    /**
     * <p>Country in which the tax rate is applied in <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> format.</p>
     * <p>If the provided combination of <code>country</code> and <code>state</code> exists for the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>State within the country, such as Texas in the United States.
     * The value is case-sensitive and must use the same casing as the <code>state</code> value in the Cart <code>shippingAddress</code>. Empty strings are treated as if <code>state</code> was omitted.</p>
     * <p>If the provided combination of <code>country</code> and <code>state</code> exists for the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Used when the total tax is a combination of multiple taxes (for example, local, state/provincial, and/or federal taxes). If <code>amount</code> is defined, the total of all subrates must equal <code>amount</code>.
     * These subrates are used to calculate the <code>taxPortions</code> field of a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> and the <code>taxedPrice</code> field of <a href="ctp:api:type:LineItem">LineItems</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfos</a>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
    }

    /**
     * <p>User-defined identifier of the TaxRate.</p>
     * <p>If the provided key is used by another TaxRate in the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?float $amount
     * @return $this
     */
    public function withAmount(?float $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param ?bool $includedInPrice
     * @return $this
     */
    public function withIncludedInPrice(?bool $includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?SubRateCollection $subRates
     * @return $this
     */
    public function withSubRates(?SubRateCollection $subRates)
    {
        $this->subRates = $subRates;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): TaxRateDraft
    {
        return new TaxRateDraftModel(
            $this->name,
            $this->amount,
            $this->includedInPrice,
            $this->country,
            $this->state,
            $this->subRates,
            $this->key
        );
    }

    public static function of(): TaxRateDraftBuilder
    {
        return new self();
    }
}
