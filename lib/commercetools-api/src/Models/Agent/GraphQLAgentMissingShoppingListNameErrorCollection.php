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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentMissingShoppingListNameError>
 * @method GraphQLAgentMissingShoppingListNameError current()
 * @method GraphQLAgentMissingShoppingListNameError end()
 * @method GraphQLAgentMissingShoppingListNameError at($offset)
 */
class GraphQLAgentMissingShoppingListNameErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentMissingShoppingListNameError $value
     * @psalm-param GraphQLAgentMissingShoppingListNameError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentMissingShoppingListNameErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentMissingShoppingListNameError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentMissingShoppingListNameError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentMissingShoppingListNameError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentMissingShoppingListNameError $data */
                $data = GraphQLAgentMissingShoppingListNameErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
