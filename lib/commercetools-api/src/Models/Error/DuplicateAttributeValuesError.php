<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateAttributeValuesError extends ErrorObject
{
    public const FIELD_ATTRIBUTES = 'attributes';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The set of attributes must be unique across all variants.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Conflicting Attributes.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
