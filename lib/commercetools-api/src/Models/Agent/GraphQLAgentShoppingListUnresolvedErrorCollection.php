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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentShoppingListUnresolvedError>
 * @method GraphQLAgentShoppingListUnresolvedError current()
 * @method GraphQLAgentShoppingListUnresolvedError end()
 * @method GraphQLAgentShoppingListUnresolvedError at($offset)
 */
class GraphQLAgentShoppingListUnresolvedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentShoppingListUnresolvedError $value
     * @psalm-param GraphQLAgentShoppingListUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentShoppingListUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentShoppingListUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentShoppingListUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentShoppingListUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentShoppingListUnresolvedError $data */
                $data = GraphQLAgentShoppingListUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
