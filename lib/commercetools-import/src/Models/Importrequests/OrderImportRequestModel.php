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
use Commercetools\Import\Models\Orders\OrderImportCollection;
use stdClass;

/**
 * @internal
 */
final class OrderImportRequestModel extends JsonObjectModel implements OrderImportRequest
{
    public const DISCRIMINATOR_VALUE = 'order';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?OrderImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderImportCollection $resources = null,
        ?string $type = null
    ) {
        $this->resources = $resources;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The resource types that can be imported.</p>
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
     * <p>The order import resources of this request.</p>
     *
     *
     * @return null|OrderImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = OrderImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?OrderImportCollection $resources
     */
    public function setResources(?OrderImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
