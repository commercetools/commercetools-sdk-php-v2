<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetTargetAction extends ReviewUpdateAction
{
    const FIELD_TARGET = 'target';

    /**
     * @return null|JsonObject
     */
    public function getTarget();

    public function setTarget(?JsonObject $target): void;
}
