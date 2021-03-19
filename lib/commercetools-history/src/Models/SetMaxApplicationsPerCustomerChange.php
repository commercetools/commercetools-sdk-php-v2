<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetMaxApplicationsPerCustomerChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Shape of the action for <code>setMaxApplicationsPerCustomer</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|int
     */
    public function getPreviousValue();

    /**
     * @return null|int
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void;

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void;
}
