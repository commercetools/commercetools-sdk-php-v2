<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraftBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetShippingMethodTaxAmountAction>
 */
final class StagedOrderSetShippingMethodTaxAmountActionBuilder implements Builder
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
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> to update. This is required for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Cannot be used in <a href="ctp:api:type:LineItemDraft">LineItemDraft</a> or <a href="ctp:api:type:CustomLineItemDraft">CustomLineItemDraft</a>.</p>
     * <p>Can only be set by these update actions:</p>
     * <ul>
     * <li><a href="ctp:api:type:CartSetLineItemTaxAmountAction">Set LineItem TaxAmount</a>, <a href="ctp:api:type:CartSetCustomLineItemTaxAmountAction">Set CustomLineItem TaxAmount</a>, or <a href="ctp:api:type:CartSetShippingMethodTaxAmountAction">Set ShippingMethod TaxAmount</a> on Carts</li>
     * <li><a href="ctp:api:type:OrderEditSetLineItemTaxAmountAction">Set LineItem TaxAmount</a>, <a href="ctp:api:type:OrderEditSetCustomLineItemTaxAmountAction">Set CustomLineItem TaxAmount</a>, or <a href="ctp:api:type:OrderEditSetShippingMethodTaxAmountAction">Set ShippingMethod TaxAmount</a> on Order Edits</li>
     * </ul>
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

    public function build(): StagedOrderSetShippingMethodTaxAmountAction
    {
        return new StagedOrderSetShippingMethodTaxAmountActionModel(
            $this->shippingKey,
            $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount
        );
    }

    public static function of(): StagedOrderSetShippingMethodTaxAmountActionBuilder
    {
        return new self();
    }
}
