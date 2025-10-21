<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLRecurringOrderFailureError extends GraphQLErrorObject
{
    public const FIELD_DETAILS = 'details';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Details about the error's cause and the entities involved.</p>
     *

     * @return null|mixed
     */
    public function getDetails();

    /**
     * @param mixed $details
     */
    public function setDetails($details): void;
}
