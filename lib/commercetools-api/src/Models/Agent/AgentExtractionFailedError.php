<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentExtractionFailedError extends ErrorObject
{
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
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
