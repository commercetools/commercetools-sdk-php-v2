<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReplicaCartDraft extends JsonObject
{
    public const FIELD_REFERENCE = 'reference';

    /**
     * @return null|JsonObject
     */
    public function getReference();

    public function setReference(?JsonObject $reference): void;
}
