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
 * @extends ErrorObjectCollection<AgentBusinessUnitLimitExceededError>
 * @method AgentBusinessUnitLimitExceededError current()
 * @method AgentBusinessUnitLimitExceededError end()
 * @method AgentBusinessUnitLimitExceededError at($offset)
 */
class AgentBusinessUnitLimitExceededErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentBusinessUnitLimitExceededError $value
     * @psalm-param AgentBusinessUnitLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentBusinessUnitLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentBusinessUnitLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentBusinessUnitLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentBusinessUnitLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentBusinessUnitLimitExceededError $data */
                $data = AgentBusinessUnitLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
