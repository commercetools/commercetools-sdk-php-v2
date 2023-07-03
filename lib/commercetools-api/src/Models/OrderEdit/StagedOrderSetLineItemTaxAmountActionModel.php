<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraftModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderSetLineItemTaxAmountActionModel extends JsonObjectModel implements StagedOrderSetLineItemTaxAmountAction
{
    public const DISCRIMINATOR_VALUE = 'setLineItemTaxAmount';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?string
     */
    protected $lineItemKey;

    /**
     *
     * @var ?ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?ExternalTaxAmountDraft $externalTaxAmount = null,
        ?string $shippingKey = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
        $this->externalTaxAmount = $externalTaxAmount;
        $this->shippingKey = $shippingKey;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemKey()
    {
        if (is_null($this->lineItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemKey = (string) $data;
        }

        return $this->lineItemKey;
    }

    /**
     * <p>Cannot be used in <a href="ctp:api:type:LineItemDraft">LineItemDraft</a> or <a href="ctp:api:type:CustomLineItemDraft">CustomLineItemDraft</a>.</p>
     * <p>Can only be set by these update actions:</p>
     * <ul>
     * <li><a href="ctp:api:type:CartSetLineItemTaxAmountAction">Set LineItem TaxAmount</a>, <a href="ctp:api:type:CartSetCustomLineItemTaxAmountAction">Set CustomLineItem TaxAmount</a>, or <a href="ctp:api:type:CartSetShippingMethodTaxAmountAction">Set ShippingMethod TaxAmount</a> on Carts</li>
     * <li><a href="ctp:api:type:OrderEditSetLineItemTaxAmountAction">Set LineItem TaxAmount</a>, <a href="ctp:api:type:OrderEditSetCustomLineItemTaxAmountAction">Set CustomLineItem TaxAmount</a>, or <a href="ctp:api:type:OrderEditSetShippingMethodTaxAmountAction">Set ShippingMethod TaxAmount</a> on Order Edits</li>
     * </ul>
     *
     *
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxAmount = ExternalTaxAmountDraftModel::of($data);
        }

        return $this->externalTaxAmount;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> used for this Line Item.```
     * This is required for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingKey()
    {
        if (is_null($this->shippingKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingKey = (string) $data;
        }

        return $this->shippingKey;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?string $lineItemKey
     */
    public function setLineItemKey(?string $lineItemKey): void
    {
        $this->lineItemKey = $lineItemKey;
    }

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     */
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void
    {
        $this->externalTaxAmount = $externalTaxAmount;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
