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
 * @implements Builder<AddReturnInfoAction>
 */
final class AddReturnInfoActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ReturnInfo|ReturnInfoBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addReturnInfo</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ReturnInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ReturnInfoBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ReturnInfo $nextValue
     * @return $this
     */
    public function withNextValue(?ReturnInfo $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ReturnInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddReturnInfoAction
    {
        return new AddReturnInfoActionModel(
            $this->change,
            $this->nextValue instanceof ReturnInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddReturnInfoActionBuilder
    {
        return new self();
    }
}
