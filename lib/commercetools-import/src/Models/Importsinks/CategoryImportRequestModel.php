<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Categories\CategoryImportCollection;
use stdClass;

final class CategoryImportRequestModel extends JsonObjectModel implements CategoryImportRequest
{
    const DISCRIMINATOR_VALUE = 'category';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CategoryImportCollection
     */
    protected $resources;

    public function __construct(
        string $type = null,
        CategoryImportCollection $resources = null
    ) {
        $this->type = $type;
        $this->resources = $resources;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportRequest::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The individual categories to import.</p>.
     *
     * @return null|CategoryImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CategoryImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = CategoryImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setResources(?CategoryImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
