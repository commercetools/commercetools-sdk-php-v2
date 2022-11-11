<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeNameDoesNotExistError extends ErrorObject
{
    public const FIELD_INVALID_ATTRIBUTE_NAME = 'invalidAttributeName';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Attribute definition for $attributeName does not exist on type $typeName.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Non-existent Attribute name.</p>
     *

     * @return null|string
     */
    public function getInvalidAttributeName();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $invalidAttributeName
     */
    public function setInvalidAttributeName(?string $invalidAttributeName): void;
}
