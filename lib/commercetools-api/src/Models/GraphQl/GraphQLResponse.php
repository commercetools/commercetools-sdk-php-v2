<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLResponse extends JsonObject
{
    public const FIELD_DATA = 'data';
    public const FIELD_ERRORS = 'errors';

    /**
     * @return null|JsonObject
     */
    public function getData();

    /**
     * @return null|GraphQLErrorCollection
     */
    public function getErrors();

    public function setData(?JsonObject $data): void;

    public function setErrors(?GraphQLErrorCollection $errors): void;
}
