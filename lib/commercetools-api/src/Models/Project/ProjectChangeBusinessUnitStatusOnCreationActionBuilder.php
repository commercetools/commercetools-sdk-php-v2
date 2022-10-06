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
 * @implements Builder<ProjectChangeBusinessUnitStatusOnCreationAction>
 */
final class ProjectChangeBusinessUnitStatusOnCreationActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**
     * <p>Status for Business Units created using the <a href="/../api/projects/me-business-units#create-businessunit">My Business Unit endpoint</a>.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function build(): ProjectChangeBusinessUnitStatusOnCreationAction
    {
        return new ProjectChangeBusinessUnitStatusOnCreationActionModel(
            $this->status
        );
    }

    public static function of(): ProjectChangeBusinessUnitStatusOnCreationActionBuilder
    {
        return new self();
    }
}
