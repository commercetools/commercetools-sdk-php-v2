<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;

interface CartAddShoppingListAction extends CartUpdateAction
{
    
    const FIELD_SHOPPING_LIST = 'shoppingList';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     *
     * @return ShoppingListResourceIdentifier|null
     */
    public function getShoppingList();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getDistributionChannel();
    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void;
    
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
    
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
}