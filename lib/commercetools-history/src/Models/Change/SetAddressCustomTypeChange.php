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
use Commercetools\History\Models\Common\CustomFields;

interface SetAddressCustomTypeChange extends Change
{

    public const FIELD_ADDRESS = 'address';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p><a href="ctp:api:type:Address">Address</a> which was extended.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|CustomFields
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFields
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?CustomFields $previousValue
     */
    public function setPreviousValue(?CustomFields $previousValue): void;

    /**
     * @param ?CustomFields $nextValue
     */
    public function setNextValue(?CustomFields $nextValue): void;
}
