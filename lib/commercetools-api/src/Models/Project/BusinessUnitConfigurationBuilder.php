<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitConfiguration>
 */
final class BusinessUnitConfigurationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $myBusinessUnitStatusOnCreation;

    /**
     * <p>Status of Business Units created using the <a href="/../api/projects/me-business-units#create-businessunit">My Business Unit endpoint</a>.</p>
     *

     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation()
    {
        return $this->myBusinessUnitStatusOnCreation;
    }

    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     * @return $this
     */
    public function withMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation)
    {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;

        return $this;
    }


    public function build(): BusinessUnitConfiguration
    {
        return new BusinessUnitConfigurationModel(
            $this->myBusinessUnitStatusOnCreation
        );
    }

    public static function of(): BusinessUnitConfigurationBuilder
    {
        return new self();
    }
}
