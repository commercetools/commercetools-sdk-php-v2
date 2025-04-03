<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitSetUnitTypeActionModel extends JsonObjectModel implements BusinessUnitSetUnitTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setUnitType';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $unitType;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $parentUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $unitType = null,
        ?BusinessUnitResourceIdentifier $parentUnit = null,
        ?string $action = null
    ) {
        $this->unitType = $unitType;
        $this->parentUnit = $parentUnit;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     * <p>If <code>unitType=&quot;Company&quot;</code>, the Business Unit <code>storeMode</code>, <code>associateMode</code>, and <code>approvalRuleMode</code> field values must be <code>Explicit</code>.</p>
     *
     *
     * @return null|string
     */
    public function getUnitType()
    {
        if (is_null($this->unitType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNIT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->unitType = (string) $data;
        }

        return $this->unitType;
    }

    /**
     * <p>New parent unit for the <a href="ctp:api:type:BusinessUnit">Business Unit</a>, if <code>unitType=&quot;Division&quot;</code>.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        if (is_null($this->parentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->parentUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->parentUnit;
    }


    /**
     * @param ?string $unitType
     */
    public function setUnitType(?string $unitType): void
    {
        $this->unitType = $unitType;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }
}
