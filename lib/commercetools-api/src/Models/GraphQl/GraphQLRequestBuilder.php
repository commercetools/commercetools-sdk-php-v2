<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

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
     * @return null|string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @return null|string
     */
    public function getOperationName()
    {
        return $this->operationName;
    }

    /**
     * @return null|GraphQLVariablesMap
     */
    public function getVariables()
    {
        return $this->variables instanceof GraphQLVariablesMapBuilder ? $this->variables->build() : $this->variables;
    }

    /**
     * @return $this
     */
    public function withQuery(?string $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOperationName(?string $operationName)
    {
        $this->operationName = $operationName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariables(?GraphQLVariablesMap $variables)
    {
        $this->variables = $variables;

        return $this;
    }

    /**
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
