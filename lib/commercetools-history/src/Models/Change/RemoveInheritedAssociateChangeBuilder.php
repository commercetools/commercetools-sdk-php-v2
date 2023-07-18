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
 * @implements Builder<RemoveInheritedAssociateChange>
 */
final class RemoveInheritedAssociateChangeBuilder implements Builder
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

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The value before the change.</p>
     *

     * @return null|InheritedAssociate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof InheritedAssociateBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?InheritedAssociateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveInheritedAssociateChange
    {
        return new RemoveInheritedAssociateChangeModel(
            $this->change,
            $this->previousValue instanceof InheritedAssociateBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveInheritedAssociateChangeBuilder
    {
        return new self();
    }
}
