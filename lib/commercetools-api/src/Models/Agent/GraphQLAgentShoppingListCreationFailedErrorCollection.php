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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentShoppingListCreationFailedError>
 * @method GraphQLAgentShoppingListCreationFailedError current()
 * @method GraphQLAgentShoppingListCreationFailedError end()
 * @method GraphQLAgentShoppingListCreationFailedError at($offset)
 */
class GraphQLAgentShoppingListCreationFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentShoppingListCreationFailedError $value
     * @psalm-param GraphQLAgentShoppingListCreationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentShoppingListCreationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentShoppingListCreationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentShoppingListCreationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentShoppingListCreationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentShoppingListCreationFailedError $data */
                $data = GraphQLAgentShoppingListCreationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
