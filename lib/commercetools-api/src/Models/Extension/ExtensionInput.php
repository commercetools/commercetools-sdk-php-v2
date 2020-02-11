<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Reference;

interface ExtensionInput extends JsonObject
{

    public const FIELD_ACTION = 'action';
    public const FIELD_RESOURCE = 'resource';

    /**
     * @return null|string
     */
    public function getAction();

    /**
     * @return null|Reference
     */
    public function getResource();

    public function setAction(?string $action): void;

    public function setResource(?Reference $resource): void;
}
