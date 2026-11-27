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
 * @extends ErrorObjectCollection<AgentShoppingListUnresolvedError>
 * @method AgentShoppingListUnresolvedError current()
 * @method AgentShoppingListUnresolvedError end()
 * @method AgentShoppingListUnresolvedError at($offset)
 */
class AgentShoppingListUnresolvedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentShoppingListUnresolvedError $value
     * @psalm-param AgentShoppingListUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentShoppingListUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentShoppingListUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentShoppingListUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentShoppingListUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentShoppingListUnresolvedError $data */
                $data = AgentShoppingListUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
