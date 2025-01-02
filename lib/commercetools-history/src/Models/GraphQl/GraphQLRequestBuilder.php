<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\GraphQl;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLRequest>
 */
final class GraphQLRequestBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $query;

    /**

     * @var ?string
     */
    private $operationName;

    /**

     * @var null|GraphQLVariablesMap|GraphQLVariablesMapBuilder
     */
    private $variables;

    /**
     * <p>String representation of the <em>Source Text</em> of the <em>Document</em> that is specified in the <a href="https://spec.graphql.org/draft/#sec-Language">Language section of the GraphQL specification</a>.</p>
     *

     * @return null|string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * <p>Name of the operation, if you defined several operations in <code>query</code>.</p>
     *

     * @return null|string
     */
    public function getOperationName()
    {
        return $this->operationName;
    }

    /**
     * <p>JSON object that contains key-value pairs in which the keys are variable names and the values are variable values.</p>
     *

     * @return null|GraphQLVariablesMap
     */
    public function getVariables()
    {
        return $this->variables instanceof GraphQLVariablesMapBuilder ? $this->variables->build() : $this->variables;
    }

    /**
     * @param ?string $query
     * @return $this
     */
    public function withQuery(?string $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param ?string $operationName
     * @return $this
     */
    public function withOperationName(?string $operationName)
    {
        $this->operationName = $operationName;

        return $this;
    }

    /**
     * @param ?GraphQLVariablesMap $variables
     * @return $this
     */
    public function withVariables(?GraphQLVariablesMap $variables)
    {
        $this->variables = $variables;

        return $this;
    }

    /**
     * @deprecated use withVariables() instead
     * @return $this
     */
    public function withVariablesBuilder(?GraphQLVariablesMapBuilder $variables)
    {
        $this->variables = $variables;

        return $this;
    }

    public function build(): GraphQLRequest
    {
        return new GraphQLRequestModel(
            $this->query,
            $this->operationName,
            $this->variables instanceof GraphQLVariablesMapBuilder ? $this->variables->build() : $this->variables
        );
    }

    public static function of(): GraphQLRequestBuilder
    {
        return new self();
    }
}
