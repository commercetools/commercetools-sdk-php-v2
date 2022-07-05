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
use Commercetools\History\Models\Common\ReturnInfo;
use Commercetools\History\Models\Common\ReturnInfoBuilder;

/**
 * @implements Builder<AddReturnInfoChange>
 */
final class AddReturnInfoChangeBuilder implements Builder
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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ReturnInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddReturnInfoChange
    {
        return new AddReturnInfoChangeModel(
            $this->change,
            $this->nextValue instanceof ReturnInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddReturnInfoChangeBuilder
    {
        return new self();
    }
}
