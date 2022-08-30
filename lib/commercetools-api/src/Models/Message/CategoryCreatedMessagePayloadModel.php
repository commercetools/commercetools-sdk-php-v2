<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryCreatedMessagePayloadModel extends JsonObjectModel implements CategoryCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CategoryCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Category
     */
    protected $category;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Category $category = null,
        ?string $type = null
    ) {
        $this->category = $category;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Category">Category</a> that was created.</p>
     *
     *
     * @return null|Category
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = CategoryModel::of($data);
        }

        return $this->category;
    }


    /**
     * @param ?Category $category
     */
    public function setCategory(?Category $category): void
    {
        $this->category = $category;
    }
}
