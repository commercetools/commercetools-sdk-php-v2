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

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierModel;

final class StagedOrderAddShoppingListActionModel extends JsonObjectModel implements StagedOrderAddShoppingListAction
{
    const DISCRIMINATOR_VALUE = 'addShoppingList';
    public function __construct(
        string $action = null,
        ShoppingListResourceIdentifier $shoppingList = null,
        ChannelResourceIdentifier $supplyChannel = null,
        ChannelResourceIdentifier $distributionChannel = null
    ) {
        $this->action = $action;
        $this->shoppingList = $shoppingList;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShoppingListResourceIdentifier
     */
    protected $shoppingList;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

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
     * @return ShoppingListResourceIdentifier|null
     */
    final public function getShoppingList()
    {
       if (is_null($this->shoppingList)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddShoppingListAction::FIELD_SHOPPING_LIST);
           if (is_null($data)) {
               return null;
           }
           
           $this->shoppingList = ShoppingListResourceIdentifierModel::of($data);
       }
       return $this->shoppingList;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddShoppingListAction::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->supplyChannel;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddShoppingListAction::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->distributionChannel;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void
    {
        $this->shoppingList = $shoppingList;
    }
    
    final public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
}