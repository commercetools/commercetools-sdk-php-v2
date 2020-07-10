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
 * @implements Builder<CustomField>
 */
final class CustomFieldBuilder implements Builder
{




    public function build(): CustomField
    {
        return new CustomFieldModel(
        );
    }

    public static function of(): CustomFieldBuilder
    {
        return new self();
    }
}
