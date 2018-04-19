<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\ShoppingList\ShoppingListReference;

class CartAddShoppingListActionModel extends CartUpdateActionModel implements CartAddShoppingListAction
{
    const DISCRIMINATOR_VALUE = 'addShoppingList';

    /**
     * @var ChannelReference
     */
    protected $distributionChannel;
    /**
     * @var ShoppingListReference
     */
    protected $shoppingList;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            $value = $this->raw(CartAddShoppingListAction::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->distributionChannel = $value;
        }
        return $this->distributionChannel;
    }
    /**
     * @return ShoppingListReference
     */
    public function getShoppingList()
    {
        if (is_null($this->shoppingList)) {
            $value = $this->raw(CartAddShoppingListAction::FIELD_SHOPPING_LIST);
            if (is_null($value)) {
                return $this->mapData(ShoppingListReference::class, null);
            }
            $value = $this->mapData(ShoppingListReference::class, $value);

            $this->shoppingList = $value;
        }
        return $this->shoppingList;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(CartAddShoppingListAction::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }
    /**
     * @param ShoppingListReference $shoppingList
     * @return $this
     */
    public function setShoppingList(ShoppingListReference $shoppingList)
    {
        $this->shoppingList = $shoppingList;

        return $this;
    }
    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

}
