<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Address;

interface RemoveBillingAddressIdChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_ADDRESS = 'address';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|array
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|array
     */
    public function getNextValue();

    /**
     * <p>Address removed from <code>billingAddressesIds</code>.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void;

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
