<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartSetBusinessUnitActionModel extends JsonObjectModel implements MyCartSetBusinessUnitAction
{
    public const DISCRIMINATOR_VALUE = 'setBusinessUnit';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?string $action = null
    ) {
        $this->businessUnit = $businessUnit;
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
     * <p>New Business Unit to assign to the Cart, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Cart.
     * Additionally, the authenticated user must have <a href="/projects/business-units#associate">Buyer</a> access to the <a href="/projects/business-units#businessunit">Business Unit</a>.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }


    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }
}
