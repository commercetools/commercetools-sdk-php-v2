<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLRequestModel extends JsonObjectModel implements GraphQLRequest
{
    /**
     * @var ?string
     */
    protected $query;

    /**
     * @var ?string
     */
    protected $operationName;

    /**
     * @var ?GraphQLVariablesMap
     */
    protected $variables;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $query = null,
        ?string $operationName = null,
        ?GraphQLVariablesMap $variables = null
    ) {
        $this->query = $query;
        $this->operationName = $operationName;
        $this->variables = $variables;
    }

    /**
     * @return null|string
     */
    public function getQuery()
    {
        if (is_null($this->query)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUERY);
            if (is_null($data)) {
                return null;
            }
            $this->query = (string) $data;
        }

        return $this->query;
    }

    /**
     * @return null|string
     */
    public function getOperationName()
    {
        if (is_null($this->operationName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OPERATION_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->operationName = (string) $data;
        }

        return $this->operationName;
    }

    /**
     * @return null|GraphQLVariablesMap
     */
    public function getVariables()
    {
        if (is_null($this->variables)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIABLES);
            if (is_null($data)) {
                return null;
            }

            $this->variables = GraphQLVariablesMapModel::of($data);
        }

        return $this->variables;
    }


    /**
     * @param ?string $query
     */
    public function setQuery(?string $query): void
    {
        $this->query = $query;
    }

    /**
     * @param ?string $operationName
     */
    public function setOperationName(?string $operationName): void
    {
        $this->operationName = $operationName;
    }

    /**
     * @param ?GraphQLVariablesMap $variables
     */
    public function setVariables(?GraphQLVariablesMap $variables): void
    {
        $this->variables = $variables;
    }
}
