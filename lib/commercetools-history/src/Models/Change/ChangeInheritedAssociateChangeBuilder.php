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
use Commercetools\History\Models\Common\InheritedAssociate;
use Commercetools\History\Models\Common\InheritedAssociateBuilder;

/**
 * @implements Builder<ChangeInheritedAssociateChange>
 */
final class ChangeInheritedAssociateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|InheritedAssociate|InheritedAssociateBuilder
     */
    private $previousValue;

    /**

     * @var null|InheritedAssociate|InheritedAssociateBuilder
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

     * @return null|InheritedAssociate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof InheritedAssociateBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|InheritedAssociate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof InheritedAssociateBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?InheritedAssociate $previousValue
     * @return $this
     */
    public function withPreviousValue(?InheritedAssociate $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?InheritedAssociate $nextValue
     * @return $this
     */
    public function withNextValue(?InheritedAssociate $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?InheritedAssociateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?InheritedAssociateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeInheritedAssociateChange
    {
        return new ChangeInheritedAssociateChangeModel(
            $this->change,
            $this->previousValue instanceof InheritedAssociateBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof InheritedAssociateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeInheritedAssociateChangeBuilder
    {
        return new self();
    }
}
