<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MaxDiscountGroupsReachedError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Maximum number of active discount groups reached ($max).&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
