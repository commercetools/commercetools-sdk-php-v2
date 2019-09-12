<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;

/**
 * @implements Builder<Attributes>
 */
final class AttributesBuilder implements Builder
{
    public function __construct()
    {
    }

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
