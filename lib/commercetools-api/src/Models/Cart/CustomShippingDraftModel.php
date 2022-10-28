<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomShippingDraftModel extends JsonObjectModel implements CustomShippingDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $shippingMethodName;

    /**
     *
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     *
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     *
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     *
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @var ?string
     */
    protected $externalTaxRate;

    /**
     *
     * @var ?DeliveryCollection
     */
    protected $deliveries;

    /**
     *
     * @var ?string
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $shippingMethodName = null,
        ?BaseAddress $shippingAddress = null,
        ?ShippingRateDraft $shippingRate = null,
        ?ShippingRateInputDraft $shippingRateInput = null,
        ?TaxCategoryResourceIdentifier $taxCategory = null,
        ?string $externalTaxRate = null,
        ?DeliveryCollection $deliveries = null,
        ?string $custom = null
    ) {
        $this->key = $key;
        $this->shippingMethodName = $shippingMethodName;
        $this->shippingAddress = $shippingAddress;
        $this->shippingRate = $shippingRate;
        $this->shippingRateInput = $shippingRateInput;
        $this->taxCategory = $taxCategory;
        $this->externalTaxRate = $externalTaxRate;
        $this->deliveries = $deliveries;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier of the custom Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
     * <p>Name of the custom Shipping Method.</p>
     *
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
     * <p>Determines the shipping rate and Tax Rate of the associated Line Items.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = BaseAddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Determines the shipping price.</p>
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
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     * <ul>
     * <li>Must be <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartClassificationType">CartClassificationType</a>.</li>
     * <li>Must be <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartScoreType">CartScoreType</a>.</li>
     * </ul>
     * <p>The <code>shippingRateInput</code> cannot be set on the Cart if <a href="ctp:api:type:CartValueType">CartValueType</a> is defined.</p>
     *
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRateInput = ShippingRateInputDraftModel::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <p>Tax Category used to determine a shipping Tax Rate if a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
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
     * <p>Tax Rate used to tax a shipping expense if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }
            $this->externalTaxRate = (string) $data;
        }

        return $this->externalTaxRate;
    }

    /**
     * <p>Deliveries tied to a Shipping Method in a multi-shipping method Cart.
     * It holds information on how items are delivered to customers.</p>
     *
     *
     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        if (is_null($this->deliveries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DELIVERIES);
            if (is_null($data)) {
                return null;
            }
            $this->deliveries = DeliveryCollection::fromArray($data);
        }

        return $this->deliveries;
    }

    /**
     * <p>Custom Fields for the custom Shipping Method.</p>
     *
     *
     * @return null|string
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }
            $this->custom = (string) $data;
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?string $externalTaxRate
     */
    public function setExternalTaxRate(?string $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }

    /**
     * @param ?DeliveryCollection $deliveries
     */
    public function setDeliveries(?DeliveryCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }

    /**
     * @param ?string $custom
     */
    public function setCustom(?string $custom): void
    {
        $this->custom = $custom;
    }
}
