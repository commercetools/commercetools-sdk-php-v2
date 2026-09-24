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
 * @extends ErrorObjectCollection<AgentStoreAmbiguousError>
 * @method AgentStoreAmbiguousError current()
 * @method AgentStoreAmbiguousError end()
 * @method AgentStoreAmbiguousError at($offset)
 */
class AgentStoreAmbiguousErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentStoreAmbiguousError $value
     * @psalm-param AgentStoreAmbiguousError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentStoreAmbiguousErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentStoreAmbiguousError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentStoreAmbiguousError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentStoreAmbiguousError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentStoreAmbiguousError $data */
                $data = AgentStoreAmbiguousErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
