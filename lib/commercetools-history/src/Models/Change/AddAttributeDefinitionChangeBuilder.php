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
use Commercetools\History\Models\Common\AttributeDefinition;
use Commercetools\History\Models\Common\AttributeDefinitionBuilder;

/**
 * @implements Builder<AddAttributeDefinitionChange>
 */
final class AddAttributeDefinitionChangeBuilder implements Builder
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

    public function build(): AddAttributeDefinitionChange
    {
        return new AddAttributeDefinitionChangeModel(
            $this->change,
            $this->nextValue instanceof AttributeDefinitionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddAttributeDefinitionChangeBuilder
    {
        return new self();
    }
}
