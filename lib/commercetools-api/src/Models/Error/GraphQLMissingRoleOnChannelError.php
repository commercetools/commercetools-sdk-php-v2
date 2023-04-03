<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLMissingRoleOnChannelError extends GraphQLErrorObject
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_MISSING_ROLE = 'missingRole';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a given <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <ul>
     * <li><code>ProductDistribution</code> for Product Distribution Channels allowed for the Store. Also required for <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>.</li>
     * <li><code>InventorySupply</code> for Inventory Supply Channels allowed for the Store.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getMissingRole();

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?string $missingRole
     */
    public function setMissingRole(?string $missingRole): void;
}
