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
 * @implements Builder<RemoveAssociateChange>
 */
final class RemoveAssociateChangeBuilder implements Builder
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AssociateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveAssociateChange
    {
        return new RemoveAssociateChangeModel(
            $this->change,
            $this->previousValue instanceof AssociateBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAssociateChangeBuilder
    {
        return new self();
    }
}
