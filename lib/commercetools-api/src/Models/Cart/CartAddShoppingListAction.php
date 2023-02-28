<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartAddShoppingListAction extends CartUpdateAction
{
    public const FIELD_SHOPPING_LIST = 'shoppingList';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * <p>Shopping List that contains the Line Items to be added.</p>
     *

     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList();

    /**
     * <p><code>distributionChannel</code> to set for all <a href="ctp:api:type:LineItem">LineItems</a> that are added to the Cart.
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p><code>supplyChannel</code> to set for all <a href="ctp:api:type:LineItem">LineItems</a> that are added to the Cart.
     * The Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @param ?ShoppingListResourceIdentifier $shoppingList
     */
    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
}
