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
use Commercetools\History\Models\Common\Associate;
use Commercetools\History\Models\Common\AssociateBuilder;

/**
 * @implements Builder<ChangeAssociateChange>
 */
final class ChangeAssociateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Associate|AssociateBuilder
     */
    private $previousValue;

    /**

     * @var null|Associate|AssociateBuilder
     */
    private $nextValue;

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

     * @return null|Associate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AssociateBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Associate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AssociateBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Associate $previousValue
     * @return $this
     */
    public function withPreviousValue(?Associate $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Associate $nextValue
     * @return $this
     */
    public function withNextValue(?Associate $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AssociateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AssociateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeAssociateChange
    {
        return new ChangeAssociateChangeModel(
            $this->change,
            $this->previousValue instanceof AssociateBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof AssociateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeAssociateChangeBuilder
    {
        return new self();
    }
}
