<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<LocalizedString>
 */
final class LocalizedStringBuilder implements Builder
{
    public function build(): LocalizedString
    {
        return new LocalizedStringModel(
        );
    }

    public static function of(): LocalizedStringBuilder
    {
        return new self();
    }
}
