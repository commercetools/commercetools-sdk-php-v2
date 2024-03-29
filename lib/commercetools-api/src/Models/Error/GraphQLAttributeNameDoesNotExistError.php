<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLAttributeNameDoesNotExistError extends GraphQLErrorObject
{
    public const FIELD_INVALID_ATTRIBUTE_NAME = 'invalidAttributeName';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Non-existent Attribute name.</p>
     *

     * @return null|string
     */
    public function getInvalidAttributeName();

    /**
     * @param ?string $invalidAttributeName
     */
    public function setInvalidAttributeName(?string $invalidAttributeName): void;
}
