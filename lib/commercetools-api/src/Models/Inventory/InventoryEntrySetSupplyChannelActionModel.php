<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class InventoryEntrySetSupplyChannelActionModel extends JsonObjectModel implements InventoryEntrySetSupplyChannelAction
{
    const DISCRIMINATOR_VALUE = 'setSupplyChannel';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    public function __construct(
        ChannelResourceIdentifier $supplyChannel = null
    ) {
        $this->supplyChannel = $supplyChannel;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InventoryEntryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(InventoryEntrySetSupplyChannelAction::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
}
