<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderFailureError extends ErrorObject
{
    public const FIELD_DETAILS = 'details';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Details about the error's cause and the entities involved.</p>
     *

     * @return null|mixed
     */
    public function getDetails();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param mixed $details
     */
    public function setDetails($details): void;
}
