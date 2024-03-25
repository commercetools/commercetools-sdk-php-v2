<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLLockedFieldError extends GraphQLErrorObject
{
    public const FIELD_FIELD = 'field';

    /**
     * <p>Field that is currently locked.</p>
     *

     * @return null|string
     */
    public function getField();

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;
}
