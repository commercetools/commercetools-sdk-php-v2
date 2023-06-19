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
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<RemoveProductChange>
 */
final class RemoveProductChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $previousValue;

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

     * @return null|Reference
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ReferenceBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Reference $previousValue
     * @return $this
     */
    public function withPreviousValue(?Reference $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ReferenceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveProductChange
    {
        return new RemoveProductChangeModel(
            $this->change,
            $this->previousValue instanceof ReferenceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveProductChangeBuilder
    {
        return new self();
    }
}
