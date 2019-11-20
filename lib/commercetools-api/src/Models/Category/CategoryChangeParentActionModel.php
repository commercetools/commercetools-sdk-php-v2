<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CategoryChangeParentActionModel extends JsonObjectModel implements CategoryChangeParentAction
{
    const DISCRIMINATOR_VALUE = 'changeParent';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CategoryResourceIdentifier
     */
    protected $parent;

    public function __construct(
        CategoryResourceIdentifier $parent = null
    ) {
        $this->parent = $parent;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryChangeParentAction::FIELD_PARENT);
            if (is_null($data)) {
                return null;
            }

            $this->parent = CategoryResourceIdentifierModel::of($data);
        }

        return $this->parent;
    }

    public function setParent(?CategoryResourceIdentifier $parent): void
    {
        $this->parent = $parent;
    }
}
