<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitConfigurationModel extends JsonObjectModel implements BusinessUnitConfiguration
{
    /**
     *
     * @var ?string
     */
    protected $myBusinessUnitStatusOnCreation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $myBusinessUnitStatusOnCreation = null
    ) {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;
    }

    /**
     * <p>Status of Business Units created using the <a href="/../api/projects/me-business-units#create-businessunit">My Business Unit endpoint</a>.</p>
     *
     *
     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation()
    {
        if (is_null($this->myBusinessUnitStatusOnCreation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MY_BUSINESS_UNIT_STATUS_ON_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->myBusinessUnitStatusOnCreation = (string) $data;
        }

        return $this->myBusinessUnitStatusOnCreation;
    }


    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     */
    public function setMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation): void
    {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;
    }
}
