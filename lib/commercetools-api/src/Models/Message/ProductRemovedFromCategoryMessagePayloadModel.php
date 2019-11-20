<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Category\CategoryReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductRemovedFromCategoryMessagePayloadModel extends JsonObjectModel implements ProductRemovedFromCategoryMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductRemovedFromCategory';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?CategoryReference
     */
    protected $category;

    public function __construct(
        bool $staged = null,
        CategoryReference $category = null
    ) {
        $this->staged = $staged;
        $this->category = $category;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductRemovedFromCategoryMessagePayload::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductRemovedFromCategoryMessagePayload::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = CategoryReferenceModel::of($data);
        }

        return $this->category;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setCategory(?CategoryReference $category): void
    {
        $this->category = $category;
    }
}
