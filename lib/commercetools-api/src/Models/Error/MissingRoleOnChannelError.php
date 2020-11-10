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
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
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
