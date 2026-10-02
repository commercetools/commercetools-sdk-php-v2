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
 * @extends ErrorObjectCollection<AgentMissingEntityTypeError>
 * @method AgentMissingEntityTypeError current()
 * @method AgentMissingEntityTypeError end()
 * @method AgentMissingEntityTypeError at($offset)
 */
class AgentMissingEntityTypeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentMissingEntityTypeError $value
     * @psalm-param AgentMissingEntityTypeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentMissingEntityTypeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentMissingEntityTypeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentMissingEntityTypeError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentMissingEntityTypeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentMissingEntityTypeError $data */
                $data = AgentMissingEntityTypeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
