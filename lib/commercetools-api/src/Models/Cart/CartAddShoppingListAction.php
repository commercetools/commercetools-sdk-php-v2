<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;

interface CartAddShoppingListAction extends CartUpdateAction
{

    public const FIELD_SHOPPING_LIST = 'shoppingList';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

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
