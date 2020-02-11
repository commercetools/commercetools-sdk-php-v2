<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class PaymentSetAmountRefundedActionModel extends JsonObjectModel implements PaymentSetAmountRefundedAction
{
    public const DISCRIMINATOR_VALUE = 'setAmountRefunded';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Money
     */
    protected $amount;


    public function __construct(
        Money $amount = null
    ) {
        $this->amount = $amount;
        $this->action = static::DISCRIMINATOR_VALUE;
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

    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }



}
