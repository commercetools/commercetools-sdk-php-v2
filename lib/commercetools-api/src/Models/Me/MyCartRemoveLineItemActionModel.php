<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceModel;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyCartRemoveLineItemActionModel extends JsonObjectModel implements MyCartRemoveLineItemAction
{
    const DISCRIMINATOR_VALUE = 'removeLineItem';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetailsToRemove;

    /**
     * @var ?Money
     */
    protected $externalPrice;

    public function __construct(
        int $quantity = null,
        ExternalLineItemTotalPrice $externalTotalPrice = null,
        string $lineItemId = null,
        ItemShippingDetailsDraft $shippingDetailsToRemove = null,
        Money $externalPrice = null
    ) {
        $this->quantity = $quantity;
        $this->externalTotalPrice = $externalTotalPrice;
        $this->lineItemId = $lineItemId;
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;
        $this->externalPrice = $externalPrice;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyCartRemoveLineItemAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartRemoveLineItemAction::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
        }

        return $this->externalTotalPrice;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartRemoveLineItemAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetailsToRemove()
    {
        if (is_null($this->shippingDetailsToRemove)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartRemoveLineItemAction::FIELD_SHIPPING_DETAILS_TO_REMOVE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetailsToRemove = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetailsToRemove;
    }

    /**
     * @return null|Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartRemoveLineItemAction::FIELD_EXTERNAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalPrice = MoneyModel::of($data);
        }

        return $this->externalPrice;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setShippingDetailsToRemove(?ItemShippingDetailsDraft $shippingDetailsToRemove): void
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;
    }

    public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }
}
