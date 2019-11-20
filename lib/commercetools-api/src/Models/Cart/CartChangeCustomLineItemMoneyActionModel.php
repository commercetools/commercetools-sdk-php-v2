<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartChangeCustomLineItemMoneyActionModel extends JsonObjectModel implements CartChangeCustomLineItemMoneyAction
{
    const DISCRIMINATOR_VALUE = 'changeCustomLineItemMoney';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?Money
     */
    protected $money;

    public function __construct(
        string $customLineItemId = null,
        Money $money = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->money = $money;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartChangeCustomLineItemMoneyAction::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartChangeCustomLineItemMoneyAction::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }

            $this->money = MoneyModel::of($data);
        }

        return $this->money;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }
}
