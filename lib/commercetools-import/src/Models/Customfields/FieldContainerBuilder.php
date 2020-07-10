<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<FieldContainer>
 */
final class FieldContainerBuilder implements Builder
{




    public function build(): FieldContainer
    {
        return new FieldContainerModel(
        );
    }

    public static function of(): FieldContainerBuilder
    {
        return new self();
    }
}
