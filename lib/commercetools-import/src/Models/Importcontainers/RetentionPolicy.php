<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RetentionPolicy extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'strategy';
    public const FIELD_STRATEGY = 'strategy';

    /**
     * <p>The strategy of the retention policy. Used to determine how the ImportContainer should be retained.</p>
     *

     * @return null|string
     */
    public function getStrategy();
}
