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

interface CustomerDateOfBirthSetMessagePayload extends MessagePayload
{
    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';

    /**

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     */
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;
}
