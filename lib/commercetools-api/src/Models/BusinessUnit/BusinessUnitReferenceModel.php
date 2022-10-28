<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitReferenceModel extends JsonObjectModel implements BusinessUnitReference
{
    public const DISCRIMINATOR_VALUE = 'business-unit';
    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?BusinessUnit
     */
    protected $obj;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?BusinessUnit $obj = null,
        ?string $typeId = null
    ) {
        $this->id = $id;
        $this->obj = $obj;
        $this->typeId = $typeId ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded BusinessUnit. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for BusinessUnit.</p>
     *
     *
     * @return null|BusinessUnit
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }
            $className = BusinessUnitModel::resolveDiscriminatorClass($data);
            $this->obj = $className::of($data);
        }

        return $this->obj;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?BusinessUnit $obj
     */
    public function setObj(?BusinessUnit $obj): void
    {
        $this->obj = $obj;
    }
}
