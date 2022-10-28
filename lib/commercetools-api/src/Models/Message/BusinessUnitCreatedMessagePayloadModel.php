<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitCreatedMessagePayloadModel extends JsonObjectModel implements BusinessUnitCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnit
     */
    protected $businessUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnit $businessUnit = null,
        ?string $type = null
    ) {
        $this->businessUnit = $businessUnit;
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
     * <p>The <a href="ctp:api:type:BusinessUnit">Business Unit</a> that was created.</p>
     *
     *
     * @return null|BusinessUnit
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }
            $className = BusinessUnitModel::resolveDiscriminatorClass($data);
            $this->businessUnit = $className::of($data);
        }

        return $this->businessUnit;
    }


    /**
     * @param ?BusinessUnit $businessUnit
     */
    public function setBusinessUnit(?BusinessUnit $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }
}
