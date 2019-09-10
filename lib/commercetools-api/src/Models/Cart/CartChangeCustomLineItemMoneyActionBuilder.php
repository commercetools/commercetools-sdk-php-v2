<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<CartChangeCustomLineItemMoneyAction>
 */
final class CartChangeCustomLineItemMoneyActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $money;

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
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getMoney()
    {
       return ($this->money instanceof MoneyBuilder ? $this->money->build() : $this->money);
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
    final public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMoney(?Money $money)
    {
        $this->money = $money;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    public function build(): CartChangeCustomLineItemMoneyAction {
        return new CartChangeCustomLineItemMoneyActionModel(
            $this->action,
            $this->customLineItemId,
            ($this->money instanceof MoneyBuilder ? $this->money->build() : $this->money)
        );
    }
    
    public static function of(): CartChangeCustomLineItemMoneyActionBuilder
    {
        return new self();
    }
}