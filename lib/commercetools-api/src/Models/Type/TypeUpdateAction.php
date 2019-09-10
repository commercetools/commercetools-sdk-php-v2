<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface TypeUpdateAction extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'action';
    const FIELD_ACTION = 'action';

    /**
     * @return null|string
     */
    public function getAction();

    public function setAction(?string $action): void;
}
