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

/**
 * @implements Builder<SetRatingChange>
 */
final class SetRatingChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?int
     */
    private $previousValue;

    /**

     * @var ?int
     */
    private $nextValue;

    /**
     * <p>Shape of the action for <code>setRating</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|int
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**

     * @return null|int
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
     * @param ?int $previousValue
     * @return $this
     */
    public function withPreviousValue(?int $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?int $nextValue
     * @return $this
     */
    public function withNextValue(?int $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetRatingChange
    {
        return new SetRatingChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetRatingChangeBuilder
    {
        return new self();
    }
}
