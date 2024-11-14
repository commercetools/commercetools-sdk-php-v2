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
     * <p>JSON object that contains the results of a GraphQL query.</p>
     *

     * @return null|mixed
     */
    public function getData();

    /**
     * <p>Errors that the GraphQL query returns.</p>
     *

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
