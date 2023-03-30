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

interface GraphQLDuplicateAttributeValuesError extends GraphQLErrorObject
{
    public const FIELD_ATTRIBUTES = 'attributes';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Conflicting Attributes.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
