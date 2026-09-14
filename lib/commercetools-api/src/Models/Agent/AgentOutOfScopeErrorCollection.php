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
 * @extends ErrorObjectCollection<AgentOutOfScopeError>
 * @method AgentOutOfScopeError current()
 * @method AgentOutOfScopeError end()
 * @method AgentOutOfScopeError at($offset)
 */
class AgentOutOfScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentOutOfScopeError $value
     * @psalm-param AgentOutOfScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentOutOfScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentOutOfScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentOutOfScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentOutOfScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentOutOfScopeError $data */
                $data = AgentOutOfScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
