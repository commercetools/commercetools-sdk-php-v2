<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
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
final class StagedOrderAddShoppingListActionModel extends JsonObjectModel implements StagedOrderAddShoppingListAction
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
    protected $supplyChannel;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShoppingListResourceIdentifier $shoppingList = null,
        ?ChannelResourceIdentifier $supplyChannel = null,
        ?ChannelResourceIdentifier $distributionChannel = null,
        ?string $action = null
    ) {
        $this->shoppingList = $shoppingList;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * @param ?ShoppingListResourceIdentifier $shoppingList
     */
    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void
    {
        $this->shoppingList = $shoppingList;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
}
