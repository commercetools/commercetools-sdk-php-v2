<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class PaymentSetAuthorizationActionModel extends JsonObjectModel implements PaymentSetAuthorizationAction
{
    public const DISCRIMINATOR_VALUE = 'setAuthorization';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Money
     */
    protected $amount;

    /**
     * @var ?DateTimeImmutable
     */
    protected $until;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $amount = null,
        ?DateTimeImmutable $until = null
    ) {
        $this->amount = $amount;
        $this->until = $until;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
        }

        return $this->amount;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getUntil()
    {
        if (is_null($this->until)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->until = $data;
        }

        return $this->until;
    }


    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param ?DateTimeImmutable $until
     */
    public function setUntil(?DateTimeImmutable $until): void
    {
        $this->until = $until;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PaymentSetAuthorizationAction::FIELD_UNTIL]) && $data[PaymentSetAuthorizationAction::FIELD_UNTIL] instanceof \DateTimeImmutable) {
            $data[PaymentSetAuthorizationAction::FIELD_UNTIL] = $data[PaymentSetAuthorizationAction::FIELD_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
