<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentSetAmountRefundedActionModel extends JsonObjectModel implements PaymentSetAmountRefundedAction
{
    const DISCRIMINATOR_VALUE = 'setAmountRefunded';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Money
     */
    protected $amount;

    public function __construct(
        string $action = null,
        Money $amount = null
    ) {
        $this->action = $action;
        $this->amount = $amount;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentSetAmountRefundedAction::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
        }

        return $this->amount;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }
}
