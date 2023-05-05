<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\StoreCountryCollection;

interface SetCountriesChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setCountries</code>.</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Countries defined for the Store prior to the update action.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getPreviousValue();

    /**
     * <p>Countries defined for the Store after the update action.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?StoreCountryCollection $previousValue
     */
    public function setPreviousValue(?StoreCountryCollection $previousValue): void;

    /**
     * @param ?StoreCountryCollection $nextValue
     */
    public function setNextValue(?StoreCountryCollection $nextValue): void;
}
