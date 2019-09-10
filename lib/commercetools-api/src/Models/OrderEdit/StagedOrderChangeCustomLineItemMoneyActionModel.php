<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderChangeCustomLineItemMoneyActionModel extends JsonObjectModel implements StagedOrderChangeCustomLineItemMoneyAction
{
    const DISCRIMINATOR_VALUE = 'changeCustomLineItemMoney';
    public function __construct(
        string $action = null,
        string $customLineItemId = null,
        Money $money = null
    ) {
        $this->action = $action;
        $this->customLineItemId = $customLineItemId;
        $this->money = $money;
        
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
     * @var ?Money
     */
    protected $money;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderChangeCustomLineItemMoneyAction::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getMoney()
    {
       if (is_null($this->money)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderChangeCustomLineItemMoneyAction::FIELD_MONEY);
           if (is_null($data)) {
               return null;
           }
           
           $this->money = MoneyModel::of($data);
       }
       return $this->money;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    
    final public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }
    
}