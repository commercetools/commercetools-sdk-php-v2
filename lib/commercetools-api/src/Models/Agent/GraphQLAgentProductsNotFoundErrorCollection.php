<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLAgentProductsNotFoundError>
 * @method GraphQLAgentProductsNotFoundError current()
 * @method GraphQLAgentProductsNotFoundError end()
 * @method GraphQLAgentProductsNotFoundError at($offset)
 */
class GraphQLAgentProductsNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentProductsNotFoundError $value
     * @psalm-param GraphQLAgentProductsNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentProductsNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentProductsNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentProductsNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentProductsNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentProductsNotFoundError $data */
                $data = GraphQLAgentProductsNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
