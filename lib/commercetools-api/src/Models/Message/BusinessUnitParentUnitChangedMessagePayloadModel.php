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
final class BusinessUnitParentUnitChangedMessagePayloadModel extends JsonObjectModel implements BusinessUnitParentUnitChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitParentUnitChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $oldParentUnit;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $newParentUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitKeyReference $oldParentUnit = null,
        ?BusinessUnitKeyReference $newParentUnit = null,
        ?string $type = null
    ) {
        $this->oldParentUnit = $oldParentUnit;
        $this->newParentUnit = $newParentUnit;
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
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit()
    {
        if (is_null($this->oldParentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->oldParentUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->oldParentUnit;
    }

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getNewParentUnit()
    {
        if (is_null($this->newParentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->newParentUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->newParentUnit;
    }


    /**
     * @param ?BusinessUnitKeyReference $oldParentUnit
     */
    public function setOldParentUnit(?BusinessUnitKeyReference $oldParentUnit): void
    {
        $this->oldParentUnit = $oldParentUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $newParentUnit
     */
    public function setNewParentUnit(?BusinessUnitKeyReference $newParentUnit): void
    {
        $this->newParentUnit = $newParentUnit;
    }
}
