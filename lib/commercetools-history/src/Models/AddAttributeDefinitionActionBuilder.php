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
 * @implements Builder<AddAttributeDefinitionAction>
 */
final class AddAttributeDefinitionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|AttributeDefinition|AttributeDefinitionBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addAttributeDefinition</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|AttributeDefinition
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AttributeDefinitionBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?AttributeDefinition $nextValue
     * @return $this
     */
    public function withNextValue(?AttributeDefinition $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?AttributeDefinitionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddAttributeDefinitionAction
    {
        return new AddAttributeDefinitionActionModel(
            $this->change,
            $this->nextValue instanceof AttributeDefinitionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddAttributeDefinitionActionBuilder
    {
        return new self();
    }
}
