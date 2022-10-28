<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartAddShippingMethodAction>
 */
final class CartAddShippingMethodActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|ShippingMethodReference|ShippingMethodReferenceBuilder
     */
    private $shippingMethod;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $shippingAddress;

    /**

     * @var null|ShippingRateInputDraft|ShippingRateInputDraftBuilder
     */
    private $shippingRateInput;

    /**

     * @var ?string
     */
    private $externalTaxRate;

    /**

     * @var ?DeliveryCollection
     */
    private $deliveries;

    /**

     * @var ?string
     */
    private $custom;

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ShippingMethodReference
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>Determines the shipping rate and Tax Rate of the Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     * <ul>
     * <li>Must be <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartClassificationType">CartClassificationType</a>.</li>
     * <li>Must be <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartScoreType">CartScoreType</a>.</li>
     * </ul>
     * <p>The <code>shippingRateInput</code> cannot be set on the Cart if <a href="ctp:api:type:CartValueType">CartValueType</a> is defined.</p>
     *

     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * <p>Tax Rate used to tax a shipping expense if a Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|string
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate;
    }

    /**
     * <p>Deliveries tied to a Shipping Method in a multi-shipping method Cart.
     * It holds information on how items are delivered to customers.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * <p>Custom Fields for the Shipping Method.</p>
     *

     * @return null|string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @param ?ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     * @return $this
     */
    public function withShippingAddress(?BaseAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @param ?string $externalTaxRate
     * @return $this
     */
    public function withExternalTaxRate(?string $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @param ?DeliveryCollection $deliveries
     * @return $this
     */
    public function withDeliveries(?DeliveryCollection $deliveries)
    {
        $this->deliveries = $deliveries;

        return $this;
    }

    /**
     * @param ?string $custom
     * @return $this
     */
    public function withCustom(?string $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withShippingMethod() instead
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodReferenceBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?BaseAddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInput() instead
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputDraftBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    public function build(): CartAddShippingMethodAction
    {
        return new CartAddShippingMethodActionModel(
            $this->shippingKey,
            $this->shippingMethod instanceof ShippingMethodReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput,
            $this->externalTaxRate,
            $this->deliveries,
            $this->custom
        );
    }

    public static function of(): CartAddShippingMethodActionBuilder
    {
        return new self();
    }
}
