<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerLabel extends Label
{

    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getFirstName();

    /**

     * @return null|string
     */
    public function getLastName();

    /**

     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void;

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;
}
