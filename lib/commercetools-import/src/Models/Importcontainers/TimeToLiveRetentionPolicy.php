<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TimeToLiveRetentionPolicy extends RetentionPolicy
{
    public const FIELD_CONFIG = 'config';

    /**
     * <p>The configuration of the time to live retention policy.</p>
     *

     * @return null|TimeToLiveConfig
     */
    public function getConfig();

    /**
     * @param ?TimeToLiveConfig $config
     */
    public function setConfig(?TimeToLiveConfig $config): void;
}
