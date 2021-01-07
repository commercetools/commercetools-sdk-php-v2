<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreRemoveSupplyChannelAction extends StoreUpdateAction
{
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
}
