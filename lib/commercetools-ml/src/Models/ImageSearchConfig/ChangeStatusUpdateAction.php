<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChangeStatusUpdateAction extends ImageSearchConfigUpdateAction
{
    public const FIELD_STATUS = 'status';

    /**
     * @return null|string
     */
    public function getStatus();

    public function setStatus(?string $status): void;
}
