<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use DateTimeImmutable;

interface CustomerSetDateOfBirthAction extends CustomerUpdateAction
{
    const FIELD_DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * <p>If not defined, the date of birth is unset.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;
}
