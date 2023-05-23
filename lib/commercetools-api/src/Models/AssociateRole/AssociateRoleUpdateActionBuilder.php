<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleUpdateAction>
 */
final class AssociateRoleUpdateActionBuilder implements Builder
{
    public function build(): AssociateRoleUpdateAction
    {
        return new AssociateRoleUpdateActionModel(
        );
    }

    public static function of(): AssociateRoleUpdateActionBuilder
    {
        return new self();
    }
}
