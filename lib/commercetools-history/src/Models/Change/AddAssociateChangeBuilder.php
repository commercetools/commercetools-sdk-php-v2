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
 * @implements Builder<AddAssociateChange>
 */
final class AddAssociateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

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
     * @param ?Associate $nextValue
     * @return $this
     */
    public function withNextValue(?Associate $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): AddAssociateChange
    {
        return new AddAssociateChangeModel(
            $this->change,
            $this->nextValue instanceof AssociateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddAssociateChangeBuilder
    {
        return new self();
    }
}
