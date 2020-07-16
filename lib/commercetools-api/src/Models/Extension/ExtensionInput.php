<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $action
     */
    public function setAction(?string $action): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;
}
