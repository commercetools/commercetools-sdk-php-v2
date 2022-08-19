<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderLineItemDistributionChannelSetMessage extends OrderMessage
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p><a href="ctp:api:type:Channel">Distribution Channel</a> that was set.</p>
     *

     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void;
}
