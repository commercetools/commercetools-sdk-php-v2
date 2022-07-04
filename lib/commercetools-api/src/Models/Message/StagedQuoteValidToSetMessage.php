<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedQuoteValidToSetMessage extends Message
{
    public const FIELD_VALID_TO = 'validTo';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidTo();

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void;
}
