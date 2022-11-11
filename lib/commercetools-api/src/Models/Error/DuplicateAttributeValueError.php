<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateAttributeValueError extends ErrorObject
{
    public const FIELD_ATTRIBUTE = 'attribute';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Attribute can't have the same value in a different variant.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Conflicting Attributes.</p>
     *

     * @return null|Attribute
     */
    public function getAttribute();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?Attribute $attribute
     */
    public function setAttribute(?Attribute $attribute): void;
}
