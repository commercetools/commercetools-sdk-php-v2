<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\StoreCountryCollection;

/**
 * @implements Builder<SetCountriesChange>
 */
final class SetCountriesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?StoreCountryCollection
     */
    private $previousValue;

    /**

     * @var ?StoreCountryCollection
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setCountries</code>.</p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Countries defined for the Store prior to the update action.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Countries defined for the Store after the update action.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?StoreCountryCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $nextValue
     * @return $this
     */
    public function withNextValue(?StoreCountryCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetCountriesChange
    {
        return new SetCountriesChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetCountriesChangeBuilder
    {
        return new self();
    }
}
