<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Import\Models\Productdrafts\ProductDraftImportCollection;

final class ProductDraftImportRequestModel extends JsonObjectModel implements ProductDraftImportRequest
{
    public const DISCRIMINATOR_VALUE = 'product-draft';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductDraftImportCollection
     */
    protected $resources;


    public function __construct(
        ProductDraftImportCollection $resources = null
    ) {
        $this->resources = $resources;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of the import resource.</p>
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
     * <p>The product draft import resources of this request.</p>
     *
     * @return null|ProductDraftImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDraftImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductDraftImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setResources(?ProductDraftImportCollection $resources): void
    {
        $this->resources = $resources;
    }



}
