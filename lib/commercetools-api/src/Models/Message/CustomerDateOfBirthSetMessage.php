<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerDateOfBirthSetMessage extends Message
{
    
    const FIELD_DATE_OF_BIRTH = 'dateOfBirth';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getDateOfBirth();
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;
}