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
final class BusinessUnitTopLevelUnitSetMessagePayloadModel extends JsonObjectModel implements BusinessUnitTopLevelUnitSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitTopLevelUnitSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $topLevelUnit;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $oldTopLevelUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitKeyReference $topLevelUnit = null,
        ?BusinessUnitKeyReference $oldTopLevelUnit = null,
        ?string $type = null
    ) {
        $this->topLevelUnit = $topLevelUnit;
        $this->oldTopLevelUnit = $oldTopLevelUnit;
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
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit()
    {
        if (is_null($this->topLevelUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOP_LEVEL_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->topLevelUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->topLevelUnit;
    }

    /**
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getOldTopLevelUnit()
    {
        if (is_null($this->oldTopLevelUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_TOP_LEVEL_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->oldTopLevelUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->oldTopLevelUnit;
    }


    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     */
    public function setTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit): void
    {
        $this->topLevelUnit = $topLevelUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldTopLevelUnit
     */
    public function setOldTopLevelUnit(?BusinessUnitKeyReference $oldTopLevelUnit): void
    {
        $this->oldTopLevelUnit = $oldTopLevelUnit;
    }
}
