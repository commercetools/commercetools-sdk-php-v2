<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryChangeParentAction>
 */
final class CategoryChangeParentActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var CategoryResourceIdentifier|?CategoryResourceIdentifierBuilder
     */
    private $parent;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getParent()
    {
        return $this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParent(?CategoryResourceIdentifier $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
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
            $this->action,
            ($this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent)
        );
    }

    public static function of(): CategoryChangeParentActionBuilder
    {
        return new self();
    }
}
