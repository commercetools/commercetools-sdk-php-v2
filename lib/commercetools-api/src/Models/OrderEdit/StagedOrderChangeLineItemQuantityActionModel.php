<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
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
final class StagedOrderChangeLineItemQuantityActionModel extends JsonObjectModel implements StagedOrderChangeLineItemQuantityAction
{
    public const DISCRIMINATOR_VALUE = 'changeLineItemQuantity';
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
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?Money
     */
    protected $externalPrice;

    /**
     *
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?int $quantity = null,
        ?Money $externalPrice = null,
        ?ExternalLineItemTotalPrice $externalTotalPrice = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
        $this->quantity = $quantity;
        $this->externalPrice = $externalPrice;
        $this->externalTotalPrice = $externalTotalPrice;
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
     * <p>New value to set.
     * If <code>0</code>, the LineItem is removed from the Order.</p>
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
     * <p>Required when the Line Item uses <code>ExternalPrice</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.
     * Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> to the given value when changing the quantity of a Line Item.</p>
     * <p>The <a href="ctp:api:type:LineItem">LineItem</a> price is updated as described in <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     *
     *
     * @return null|Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalPrice = MoneyModel::of($data);
        }

        return $this->externalPrice;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> and <code>totalPrice</code> to the given value when changing the quantity of a Line Item with the <code>ExternalTotal</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.
     * If <code>externalTotalPrice</code> is not given and the <code>priceMode</code> is <code>ExternalTotal</code>, the external price is unset and the <code>priceMode</code> is set to <code>Platform</code>.</p>
     *
     *
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
        }

        return $this->externalTotalPrice;
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
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?Money $externalPrice
     */
    public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     */
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }
}
