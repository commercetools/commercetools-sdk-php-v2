<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $query
     */
    public function setQuery(?string $query): void;

    /**
     * @param ?string $operationName
     */
    public function setOperationName(?string $operationName): void;

    /**
     * @param ?GraphQLVariablesMap $variables
     */
    public function setVariables(?GraphQLVariablesMap $variables): void;
}
