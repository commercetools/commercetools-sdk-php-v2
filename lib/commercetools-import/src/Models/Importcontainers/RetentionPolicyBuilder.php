<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RetentionPolicy>
 */
final class RetentionPolicyBuilder implements Builder
{
    public function build(): RetentionPolicy
    {
        return new RetentionPolicyModel(
        );
    }

    public static function of(): RetentionPolicyBuilder
    {
        return new self();
    }
}
