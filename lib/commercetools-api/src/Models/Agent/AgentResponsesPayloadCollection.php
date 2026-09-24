<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AgentResponsesPayload>
 * @method AgentResponsesPayload current()
 * @method AgentResponsesPayload end()
 * @method AgentResponsesPayload at($offset)
 */
class AgentResponsesPayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert AgentResponsesPayload $value
     * @psalm-param AgentResponsesPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesPayload $data */
                $data = AgentResponsesPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
