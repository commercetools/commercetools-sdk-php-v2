<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetLineItemDistributionChannelAction extends StagedOrderUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
}
