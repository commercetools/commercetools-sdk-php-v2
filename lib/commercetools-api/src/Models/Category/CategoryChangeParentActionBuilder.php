<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeParentAction>
 */
final class CategoryChangeParentActionBuilder implements Builder
{
    /**

     * @var null|CategoryResourceIdentifier|CategoryResourceIdentifierBuilder
     */
    private $parent;

    /**
     * <p>New value to set as parent.</p>
     *

     * @return null|CategoryResourceIdentifier
     */
    public function getParent()
    {
        return $this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent;
    }

    /**
     * @param ?CategoryResourceIdentifier $parent
     * @return $this
     */
    public function withParent(?CategoryResourceIdentifier $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @deprecated use withParent() instead
     * @return $this
     */
    public function withParentBuilder(?CategoryResourceIdentifierBuilder $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    public function build(): CategoryChangeParentAction
    {
        return new CategoryChangeParentActionModel(
            $this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent
        );
    }

    public static function of(): CategoryChangeParentActionBuilder
    {
        return new self();
    }
}
