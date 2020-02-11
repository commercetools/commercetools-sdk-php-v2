<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface GraphQLRequest extends JsonObject
{

    public const FIELD_QUERY = 'query';
    public const FIELD_OPERATION_NAME = 'operationName';
    public const FIELD_VARIABLES = 'variables';

    /**
     * @return null|string
     */
    public function getQuery();

    /**
     * @return null|string
     */
    public function getOperationName();

    /**
     * @return null|GraphQLVariablesMap
     */
    public function getVariables();

    public function setQuery(?string $query): void;

    public function setOperationName(?string $operationName): void;

    public function setVariables(?GraphQLVariablesMap $variables): void;
}
