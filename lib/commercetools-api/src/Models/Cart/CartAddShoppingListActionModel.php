<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartAddShoppingListActionModel extends JsonObjectModel implements CartAddShoppingListAction
{
    public const DISCRIMINATOR_VALUE = 'addShoppingList';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ShoppingListResourceIdentifier
     */
    protected $shoppingList;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShoppingListResourceIdentifier $shoppingList = null,
        ?ChannelResourceIdentifier $distributionChannel = null,
        ?ChannelResourceIdentifier $supplyChannel = null,
        ?string $action = null
    ) {
        $this->shoppingList = $shoppingList;
        $this->distributionChannel = $distributionChannel;
        $this->supplyChannel = $supplyChannel;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Shopping List that contains the Line Items to be added.</p>
     *
     *
     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList()
    {
        if (is_null($this->shoppingList)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHOPPING_LIST);
            if (is_null($data)) {
                return null;
            }

            $this->shoppingList = ShoppingListResourceIdentifierModel::of($data);
        }

        return $this->shoppingList;
    }

    /**
     * <p><code>distributionChannel</code> to set for all <a href="ctp:api:type:LineItem">LineItems</a> that are added to the Cart.
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * <p><code>supplyChannel</code> to set for all <a href="ctp:api:type:LineItem">LineItems</a> that are added to the Cart.
     * The Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }


    /**
     * @param ?ShoppingListResourceIdentifier $shoppingList
     */
    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void
    {
        $this->shoppingList = $shoppingList;
    }

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
}
