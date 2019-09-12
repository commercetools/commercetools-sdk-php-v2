<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Productvariants\ProductVariantPatchCollection;
use stdClass;

final class ProductVariantPatchRequestModel extends JsonObjectModel implements ProductVariantPatchRequest
{
    const DISCRIMINATOR_VALUE = 'product-variant-patch';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductVariantPatchCollection
     */
    protected $patches;

    public function __construct(
        string $type = null,
        ProductVariantPatchCollection $patches = null
    ) {
        $this->type = $type;
        $this->patches = $patches;
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
     * <p>The individual product variant patches.</p>.
     *
     * @return null|ProductVariantPatchCollection
     */
    public function getPatches()
    {
        if (is_null($this->patches)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantPatchRequest::FIELD_PATCHES);
            if (is_null($data)) {
                return null;
            }
            $this->patches = ProductVariantPatchCollection::fromArray($data);
        }

        return $this->patches;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setPatches(?ProductVariantPatchCollection $patches): void
    {
        $this->patches = $patches;
    }
}
