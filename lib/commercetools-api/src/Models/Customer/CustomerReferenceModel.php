<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

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
final class CustomerReferenceModel extends JsonObjectModel implements CustomerReference
{
    public const DISCRIMINATOR_VALUE = 'customer';
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
     * @var ?Customer
     */
    protected $obj;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?Customer $obj = null,
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
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Customer">Customer</a>.</p>
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
     * <p>Contains the representation of the expanded Customer. Only present in responses to requests with <a href="ctp:api:type:Expansion">Reference Expansion</a> for Customers.</p>
     *
     *
     * @return null|Customer
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = CustomerModel::of($data);
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
     * @param ?Customer $obj
     */
    public function setObj(?Customer $obj): void
    {
        $this->obj = $obj;
    }
}
