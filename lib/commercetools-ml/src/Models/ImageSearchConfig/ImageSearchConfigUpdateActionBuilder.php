<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImageSearchConfigUpdateAction>
 */
final class ImageSearchConfigUpdateActionBuilder implements Builder
{
    public function build(): ImageSearchConfigUpdateAction
    {
        return new ImageSearchConfigUpdateActionModel(
        );
    }

    public static function of(): ImageSearchConfigUpdateActionBuilder
    {
        return new self();
    }
}
