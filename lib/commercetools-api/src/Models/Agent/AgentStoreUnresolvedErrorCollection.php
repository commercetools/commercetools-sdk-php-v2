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
 * @extends ErrorObjectCollection<AgentStoreUnresolvedError>
 * @method AgentStoreUnresolvedError current()
 * @method AgentStoreUnresolvedError end()
 * @method AgentStoreUnresolvedError at($offset)
 */
class AgentStoreUnresolvedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentStoreUnresolvedError $value
     * @psalm-param AgentStoreUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentStoreUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentStoreUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentStoreUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentStoreUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentStoreUnresolvedError $data */
                $data = AgentStoreUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
