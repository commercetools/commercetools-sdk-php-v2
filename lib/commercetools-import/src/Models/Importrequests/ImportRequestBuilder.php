<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportRequest>
 */
final class ImportRequestBuilder implements Builder
{




    public function build(): ImportRequest
    {
        return new ImportRequestModel(
        );
    }

    public static function of(): ImportRequestBuilder
    {
        return new self();
    }
}
