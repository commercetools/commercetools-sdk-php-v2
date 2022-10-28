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

     * @return null|mixed
     */
    public function getData();

    /**

     * @return null|GraphQLErrorCollection
     */
    public function getErrors();

    /**
     * @param mixed $data
     */
    public function setData($data): void;

    /**
     * @param ?GraphQLErrorCollection $errors
     */
    public function setErrors(?GraphQLErrorCollection $errors): void;
}
