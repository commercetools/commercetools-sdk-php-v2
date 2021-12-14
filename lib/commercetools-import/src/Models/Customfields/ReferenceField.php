<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\KeyReference;

interface ReferenceField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>References a resource by key</p>
     *
     * @return null|KeyReference
     */
    public function getValue();

    /**
     * @param ?KeyReference $value
     */
    public function setValue(?KeyReference $value): void;
}
