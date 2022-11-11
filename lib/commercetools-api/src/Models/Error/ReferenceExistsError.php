<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReferenceExistsError extends ErrorObject
{
    public const FIELD_REFERENCED_BY = 'referencedBy';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Can not delete a $resource while it is referenced by at least one $referencedBy.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getReferencedBy();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $referencedBy
     */
    public function setReferencedBy(?string $referencedBy): void;
}
