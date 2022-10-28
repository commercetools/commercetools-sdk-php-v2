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
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingDraftModel extends JsonObjectModel implements ShippingDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?ShippingMethodReference
     */
    protected $shippingMethod;

    /**
     *
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     *
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;

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
        ?ShippingMethodReference $shippingMethod = null,
        ?BaseAddress $shippingAddress = null,
        ?ShippingRateInputDraft $shippingRateInput = null,
        ?string $externalTaxRate = null,
        ?DeliveryCollection $deliveries = null,
        ?string $custom = null
    ) {
        $this->key = $key;
        $this->shippingMethod = $shippingMethod;
        $this->shippingAddress = $shippingAddress;
        $this->shippingRateInput = $shippingRateInput;
        $this->externalTaxRate = $externalTaxRate;
        $this->deliveries = $deliveries;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
     * <p>Shipping Methods added to the Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|ShippingMethodReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodReferenceModel::of($data);
        }

        return $this->shippingMethod;
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
     * <p>Tax Rate used for taxing a shipping expense if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
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
     * <p>Holds information on how items are delivered to customers.</p>
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
     * <p>Custom Fields for Shipping.</p>
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
     * @param ?ShippingMethodReference $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodReference $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
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
