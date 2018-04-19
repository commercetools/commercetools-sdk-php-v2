<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetDateOfBirthAction extends CustomerUpdateAction
{
    const FIELD_DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * @param \DateTimeImmutable $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth);

}
