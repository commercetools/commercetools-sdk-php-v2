<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface ResourceDeletionError extends ErrorObject
{

    public const FIELD_RESOURCE = 'resource';

    /**
     * @return null|JsonObject
     */
    public function getResource();

    public function setResource(?JsonObject $resource): void;
}
