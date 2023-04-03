<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLReferenceExistsError extends GraphQLErrorObject
{
    public const FIELD_REFERENCED_BY = 'referencedBy';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getReferencedBy();

    /**
     * @param ?string $referencedBy
     */
    public function setReferencedBy(?string $referencedBy): void;
}
