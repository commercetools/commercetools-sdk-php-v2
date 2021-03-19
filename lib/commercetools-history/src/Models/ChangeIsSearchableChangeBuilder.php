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
 * @implements Builder<ChangeIsSearchableChange>
 */
final class ChangeIsSearchableChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?bool
     */
    private $nextValue;

    /**
     * @var ?bool
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeIsSearchable</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the updated attribute.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|bool
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|bool
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

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

    /**
     * @param ?bool $previousValue
     * @return $this
     */
    public function withPreviousValue(?bool $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): ChangeIsSearchableChange
    {
        return new ChangeIsSearchableChangeModel(
            $this->change,
            $this->attributeName,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeIsSearchableChangeBuilder
    {
        return new self();
    }
}
