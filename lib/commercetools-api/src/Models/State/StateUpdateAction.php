<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateUpdateAction extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'action';
    public const FIELD_ACTION = 'action';

    /**
     * @return null|string
     */
    public function getAction();
}
