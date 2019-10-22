<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;
use stdClass;

final class ProductVariantImportRequestModel extends JsonObjectModel implements ProductVariantImportRequest
{
    const DISCRIMINATOR_VALUE = 'product-variant';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductVariantImportCollection
     */
    protected $resources;

    public function __construct(
        string $type = null,
        ProductVariantImportCollection $resources = null
    ) {
        $this->type = $type;
        $this->resources = $resources;
    }

    /**
     * <p>The type of the import resource.</p>.
     *
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
     * <p>The product variant import resources of this request.</p>.
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductVariantImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setResources(?ProductVariantImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
