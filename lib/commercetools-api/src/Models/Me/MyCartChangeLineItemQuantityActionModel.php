<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartChangeLineItemQuantityActionModel extends JsonObjectModel implements MyCartChangeLineItemQuantityAction
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?int $quantity = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
        $this->quantity = $quantity;
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
     * <p>New value to set.</p>
     * <p>If <code>0</code>, the Line Item is removed from the Cart.</p>
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
}
