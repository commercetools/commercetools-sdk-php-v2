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
use Commercetools\Import\Models\Customers\CustomerImportCollection;
use stdClass;

/**
 * @internal
 */
final class CustomerImportRequestModel extends JsonObjectModel implements CustomerImportRequest
{
    public const DISCRIMINATOR_VALUE = 'customer';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CustomerImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerImportCollection $resources = null
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
     * <p>The customer import resources of this request.</p>
     *
     * @return null|CustomerImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = CustomerImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?CustomerImportCollection $resources
     */
    public function setResources(?CustomerImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
