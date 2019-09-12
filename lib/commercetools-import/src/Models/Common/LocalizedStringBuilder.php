<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<LocalizedString>
 */
final class LocalizedStringBuilder implements Builder
{
    public function __construct()
    {
    }

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
