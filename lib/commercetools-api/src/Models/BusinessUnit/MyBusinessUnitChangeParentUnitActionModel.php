<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateAction;
use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyBusinessUnitChangeParentUnitActionModel extends JsonObjectModel implements MyBusinessUnitChangeParentUnitAction
{
    public const DISCRIMINATOR_VALUE = 'changeParentUnit';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $parentUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitResourceIdentifier $parentUnit = null,
        ?string $action = null
    ) {
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
     * <p>New parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
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
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }
}
