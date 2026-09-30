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
 * @extends ErrorObjectCollection<AgentShoppingListCreationFailedError>
 * @method AgentShoppingListCreationFailedError current()
 * @method AgentShoppingListCreationFailedError end()
 * @method AgentShoppingListCreationFailedError at($offset)
 */
class AgentShoppingListCreationFailedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentShoppingListCreationFailedError $value
     * @psalm-param AgentShoppingListCreationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentShoppingListCreationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentShoppingListCreationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentShoppingListCreationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentShoppingListCreationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentShoppingListCreationFailedError $data */
                $data = AgentShoppingListCreationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
