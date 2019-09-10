<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<PaymentSetAuthorizationAction>
 */
final class PaymentSetAuthorizationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?MoneyBuilder|Money
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
       return $this->action;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmount()
    {
       return ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount);
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getUntil()
    {
       return $this->until;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmount(?Money $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withUntil(?DateTimeImmutable $until)
    {
        $this->until = $until;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    public function build(): PaymentSetAuthorizationAction {
        return new PaymentSetAuthorizationActionModel(
            $this->action,
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount),
            $this->until
        );
    }
    
    public static function of(): PaymentSetAuthorizationActionBuilder
    {
        return new self();
    }
}