<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetLineItemTaxAmountActionModel extends JsonObjectModel implements CartSetLineItemTaxAmountAction
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
        ?ExternalTaxAmountDraft $externalTaxAmount = null,
        ?string $shippingKey = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
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
