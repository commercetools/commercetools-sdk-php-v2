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
     * <p>The <code>dateOfBirth</code> that was set during the <a href="ctp:api:type:CustomerSetDateOfBirthAction">Set Date of Birth</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     */
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;
}
