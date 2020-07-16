<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface UpdateAction extends JsonObject
{
    public const FIELD_ACTION = 'action';

    /**
     * @return null|string
     */
    public function getAction();

    /**
     * @param ?string $action
     */
    public function setAction(?string $action): void;
}
