<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductRemoveFromCategoryActionModel extends JsonObjectModel implements ProductRemoveFromCategoryAction
{
    const DISCRIMINATOR_VALUE = 'removeFromCategory';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CategoryResourceIdentifier
     */
    protected $category;

    /**
     * @var ?bool
     */
    protected $staged;

    public function __construct(
        CategoryResourceIdentifier $category = null,
        bool $staged = null
    ) {
        $this->category = $category;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
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
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductRemoveFromCategoryAction::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = CategoryResourceIdentifierModel::of($data);
        }

        return $this->category;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductRemoveFromCategoryAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    public function setCategory(?CategoryResourceIdentifier $category): void
    {
        $this->category = $category;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
