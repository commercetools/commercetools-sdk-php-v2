<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\ShoppingList\ShoppingListReference;

interface CartAddShoppingListAction extends CartUpdateAction
{
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_SHOPPING_LIST = 'shoppingList';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return ShoppingListReference
     */
    public function getShoppingList();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel);

    /**
     * @param ShoppingListReference $shoppingList
     * @return $this
     */
    public function setShoppingList(ShoppingListReference $shoppingList);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

}
