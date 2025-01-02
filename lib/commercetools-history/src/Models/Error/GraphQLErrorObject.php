<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface GraphQLErrorObject extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'code';
    public const FIELD_CODE = 'code';
    public const FIELD_PATTERN1 = '//';

    /**
     * <p>One of the error codes that is listed on the <a href="/errors">Errors</a> page.</p>
     *

     * @return null|string
     */
    public function getCode();

}
