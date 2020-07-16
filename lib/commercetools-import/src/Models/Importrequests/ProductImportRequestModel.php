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
use Commercetools\Import\Models\Products\ProductImportCollection;
use stdClass;

/**
 * @internal
 */
final class ProductImportRequestModel extends JsonObjectModel implements ProductImportRequest
{
    public const DISCRIMINATOR_VALUE = 'product';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductImportCollection $resources = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The product import resources of this request.</p>
     *
     * @return null|ProductImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?ProductImportCollection $resources
     */
    public function setResources(?ProductImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
