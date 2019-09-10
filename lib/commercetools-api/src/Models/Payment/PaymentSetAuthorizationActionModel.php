<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class PaymentSetAuthorizationActionModel extends JsonObjectModel implements PaymentSetAuthorizationAction
{
    const DISCRIMINATOR_VALUE = 'setAuthorization';
    public function __construct(
        string $action = null,
        Money $amount = null,
        DateTimeImmutable $until = null
    ) {
        $this->action = $action;
        $this->amount = $amount;
        $this->until = $until;
        
    }

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
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmount()
    {
       if (is_null($this->amount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentSetAuthorizationAction::FIELD_AMOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->amount = MoneyModel::of($data);
       }
       return $this->amount;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getUntil()
    {
       if (is_null($this->until)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetAuthorizationAction::FIELD_UNTIL);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->until = $data;
       }
       return $this->until;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }
    
    final public function setUntil(?DateTimeImmutable $until): void
    {
        $this->until = $until;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[PaymentSetAuthorizationAction::FIELD_UNTIL]) && $data[PaymentSetAuthorizationAction::FIELD_UNTIL] instanceof \DateTimeImmutable) {
           $data[PaymentSetAuthorizationAction::FIELD_UNTIL] = $data[PaymentSetAuthorizationAction::FIELD_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}