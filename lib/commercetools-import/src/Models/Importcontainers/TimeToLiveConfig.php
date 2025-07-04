<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TimeToLiveConfig extends JsonObject
{
    public const FIELD_TIME_TO_LIVE = 'timeToLive';

    /**
     * <p>The time to live of the ImportContainer. Used to generate the <code>expiresAt</code> value of the ImportContainer. The lowest accepted value is <code>1h</code> and the highest accepted value is <code>30d</code>.</p>
     *

     * @return null|string
     */
    public function getTimeToLive();

    /**
     * @param ?string $timeToLive
     */
    public function setTimeToLive(?string $timeToLive): void;
}
