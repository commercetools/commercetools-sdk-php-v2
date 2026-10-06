<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<AgentMissingShoppingListNameError>
 * @method AgentMissingShoppingListNameError current()
 * @method AgentMissingShoppingListNameError end()
 * @method AgentMissingShoppingListNameError at($offset)
 */
class AgentMissingShoppingListNameErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentMissingShoppingListNameError $value
     * @psalm-param AgentMissingShoppingListNameError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentMissingShoppingListNameErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentMissingShoppingListNameError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentMissingShoppingListNameError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentMissingShoppingListNameError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentMissingShoppingListNameError $data */
                $data = AgentMissingShoppingListNameErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
