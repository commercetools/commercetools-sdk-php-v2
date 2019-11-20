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

final class ProductAddToCategoryActionModel extends JsonObjectModel implements ProductAddToCategoryAction
{
    const DISCRIMINATOR_VALUE = 'addToCategory';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $orderHint;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?CategoryResourceIdentifier
     */
    protected $category;

    public function __construct(
        string $orderHint = null,
        bool $staged = null,
        CategoryResourceIdentifier $category = null
    ) {
        $this->orderHint = $orderHint;
        $this->staged = $staged;
        $this->category = $category;
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
     * @return null|string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductAddToCategoryAction::FIELD_ORDER_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->orderHint = (string) $data;
        }

        return $this->orderHint;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductAddToCategoryAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductAddToCategoryAction::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = CategoryResourceIdentifierModel::of($data);
        }

        return $this->category;
    }

    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setCategory(?CategoryResourceIdentifier $category): void
    {
        $this->category = $category;
    }
}
