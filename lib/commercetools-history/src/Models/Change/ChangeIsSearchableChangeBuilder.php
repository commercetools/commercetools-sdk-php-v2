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
 * @implements Builder<ChangeIsSearchableChange>
 */
final class ChangeIsSearchableChangeBuilder implements Builder
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

     * @var ?string
     */
    private $attributeName;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|bool
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|bool
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
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

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }


    public function build(): ChangeIsSearchableChange
    {
        return new ChangeIsSearchableChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->attributeName
        );
    }

    public static function of(): ChangeIsSearchableChangeBuilder
    {
        return new self();
    }
}
