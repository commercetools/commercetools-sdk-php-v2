<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Agent\AgentResponsesSuccessCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AgentResponsesSuccessCollection<AgentResponsesShoppingListSuccess>
 * @method AgentResponsesShoppingListSuccess current()
 * @method AgentResponsesShoppingListSuccess end()
 * @method AgentResponsesShoppingListSuccess at($offset)
 */
class AgentResponsesShoppingListSuccessCollection extends AgentResponsesSuccessCollection
{
    /**
     * @psalm-assert AgentResponsesShoppingListSuccess $value
     * @psalm-param AgentResponsesShoppingListSuccess|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesShoppingListSuccessCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesShoppingListSuccess) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesShoppingListSuccess
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesShoppingListSuccess {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesShoppingListSuccess $data */
                $data = AgentResponsesShoppingListSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
