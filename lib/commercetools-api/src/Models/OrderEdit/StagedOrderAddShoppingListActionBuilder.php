<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierBuilder;

/**
 * @implements Builder<StagedOrderAddShoppingListAction>
 */
final class StagedOrderAddShoppingListActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShoppingListResourceIdentifierBuilder|ShoppingListResourceIdentifier
     */
    protected $shoppingList;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
     */
    protected $distributionChannel;

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
     * @return ShoppingListResourceIdentifier|null
     */
    final public function getShoppingList()
    {
       return ($this->shoppingList instanceof ShoppingListResourceIdentifierBuilder ? $this->shoppingList->build() : $this->shoppingList);
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       return ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel);
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       return ($this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel);
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
    final public function withShoppingList(?ShoppingListResourceIdentifier $shoppingList)
    {
        $this->shoppingList = $shoppingList;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withShoppingListBuilder(?ShoppingListResourceIdentifierBuilder $shoppingList)
    {
        $this->shoppingList = $shoppingList;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    
    public function build(): StagedOrderAddShoppingListAction {
        return new StagedOrderAddShoppingListActionModel(
            $this->action,
            ($this->shoppingList instanceof ShoppingListResourceIdentifierBuilder ? $this->shoppingList->build() : $this->shoppingList),
            ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            ($this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel)
        );
    }
    
    public static function of(): StagedOrderAddShoppingListActionBuilder
    {
        return new self();
    }
}