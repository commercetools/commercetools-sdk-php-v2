<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;

interface StagedOrderAddShoppingListAction extends StagedOrderUpdateAction
{
    const FIELD_SHOPPING_LIST = 'shoppingList';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
}
