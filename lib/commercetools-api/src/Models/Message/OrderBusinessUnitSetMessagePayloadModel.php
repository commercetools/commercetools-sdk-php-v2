<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderBusinessUnitSetMessagePayloadModel extends JsonObjectModel implements OrderBusinessUnitSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderBusinessUnitSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $oldbusinessUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitKeyReference $businessUnit = null,
        ?BusinessUnitKeyReference $oldbusinessUnit = null,
        ?string $type = null
    ) {
        $this->businessUnit = $businessUnit;
        $this->oldbusinessUnit = $oldbusinessUnit;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getOldbusinessUnit()
    {
        if (is_null($this->oldbusinessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLDBUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->oldbusinessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->oldbusinessUnit;
    }


    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldbusinessUnit
     */
    public function setOldbusinessUnit(?BusinessUnitKeyReference $oldbusinessUnit): void
    {
        $this->oldbusinessUnit = $oldbusinessUnit;
    }
}
