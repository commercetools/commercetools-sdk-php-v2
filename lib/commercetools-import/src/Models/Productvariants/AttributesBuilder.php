<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Attributes>
 */
final class AttributesBuilder implements Builder
{




    public function build(): Attributes
    {
        return new AttributesModel(
        );
    }

    public static function of(): AttributesBuilder
    {
        return new self();
    }
}
