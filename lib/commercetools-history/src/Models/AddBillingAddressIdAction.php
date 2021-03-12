<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddBillingAddressIdAction extends Action
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Update action for <code>addBillingAddressId</code> action on customers.</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|array
     */
    public function getNextValue();

    /**
     * @return null|array
     */
    public function getPreviousValue();

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void;

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
