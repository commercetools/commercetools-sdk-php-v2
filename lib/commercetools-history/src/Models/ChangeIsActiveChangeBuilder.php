<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeIsActiveChange>
 */
final class ChangeIsActiveChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?bool
     */
    private $previousValue;

    /**
     * @var ?bool
     */
    private $nextValue;

    /**
     * <p>Shape of the action for <code>changeIsActive</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|bool
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|bool
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
     * @param ?bool $previousValue
     * @return $this
     */
    public function withPreviousValue(?bool $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?bool $nextValue
     * @return $this
     */
    public function withNextValue(?bool $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeIsActiveChange
    {
        return new ChangeIsActiveChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeIsActiveChangeBuilder
    {
        return new self();
    }
}
