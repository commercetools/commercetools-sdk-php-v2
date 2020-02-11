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
 * @implements Builder<ProjectUpdateAction>
 */
final class ProjectUpdateActionBuilder implements Builder
{




    public function build(): ProjectUpdateAction
    {
        return new ProjectUpdateActionModel(
        );
    }

    public static function of(): ProjectUpdateActionBuilder
    {
        return new self();
    }
}
