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
use Commercetools\History\Models\ChangeValue\FieldDefinitionOrderValueCollection;

/**
 * @implements Builder<ChangeFieldDefinitionOrderChange>
 */
final class ChangeFieldDefinitionOrderChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?FieldDefinitionOrderValueCollection
     */
    private $previousValue;

    /**

     * @var ?FieldDefinitionOrderValueCollection
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

     * @return null|FieldDefinitionOrderValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|FieldDefinitionOrderValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?FieldDefinitionOrderValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?FieldDefinitionOrderValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?FieldDefinitionOrderValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?FieldDefinitionOrderValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeFieldDefinitionOrderChange
    {
        return new ChangeFieldDefinitionOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeFieldDefinitionOrderChangeBuilder
    {
        return new self();
    }
}
