<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;
use stdClass;

final class ProductTypeImportRequestModel extends JsonObjectModel implements ProductTypeImportRequest
{
    const DISCRIMINATOR_VALUE = 'product-type';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductTypeImportCollection
     */
    protected $resources;

    public function __construct(
        string $type = null,
        ProductTypeImportCollection $resources = null
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
     * <p>The individual product types to import.</p>.
     *
     * @return null|ProductTypeImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductTypeImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setResources(?ProductTypeImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
