<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetShippingMethodTaxAmountAction>
 */
final class CartSetShippingMethodTaxAmountActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|ExternalTaxAmountDraft|ExternalTaxAmountDraftBuilder
     */
    private $externalTaxAmount;

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> to update. This is required for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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

     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        return $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount;
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
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function withExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    /**
     * @deprecated use withExternalTaxAmount() instead
     * @return $this
     */
    public function withExternalTaxAmountBuilder(?ExternalTaxAmountDraftBuilder $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    public function build(): CartSetShippingMethodTaxAmountAction
    {
        return new CartSetShippingMethodTaxAmountActionModel(
            $this->shippingKey,
            $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount
        );
    }

    public static function of(): CartSetShippingMethodTaxAmountActionBuilder
    {
        return new self();
    }
}
