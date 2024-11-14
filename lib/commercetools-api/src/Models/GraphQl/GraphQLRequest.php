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
     * <p>String representation of the <em>Source Text</em> of the <em>Document</em> that is specified in the <a href="https://spec.graphql.org/draft/#sec-Language">Language section of the GraphQL specification</a>.</p>
     *

     * @return null|string
     */
    public function getQuery();

    /**
     * <p>Name of the operation, if you defined several operations in <code>query</code>.</p>
     *

     * @return null|string
     */
    public function getOperationName();

    /**
     * <p>JSON object that contains key-value pairs in which the keys are variable names and the values are variable values.</p>
     *

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
