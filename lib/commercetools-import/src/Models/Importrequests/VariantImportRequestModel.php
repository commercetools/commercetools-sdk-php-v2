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
use Commercetools\Import\Models\Variants\VariantImportCollection;
use stdClass;

/**
 * @internal
 */
final class VariantImportRequestModel extends JsonObjectModel implements VariantImportRequest
{
    public const DISCRIMINATOR_VALUE = 'variant';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?VariantImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?VariantImportCollection $resources = null,
        ?string $type = null
    ) {
        $this->resources = $resources;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The resource type that can be imported.</p>
     *
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
     * <p>The Variant import resources of this request.</p>
     *
     *
     * @return null|VariantImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = VariantImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?VariantImportCollection $resources
     */
    public function setResources(?VariantImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
