<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
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
