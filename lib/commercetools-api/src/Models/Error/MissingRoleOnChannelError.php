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

interface MissingRoleOnChannelError extends ErrorObject
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_MISSING_ROLE = 'missingRole';

    /**
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>Describes the purpose and type of the Channel. A Channel can have one or more roles.</p>
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
