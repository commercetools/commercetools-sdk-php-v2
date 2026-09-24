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
 * @extends MapperSequence<AgentResponsesMultipartRequest>
 * @method AgentResponsesMultipartRequest current()
 * @method AgentResponsesMultipartRequest end()
 * @method AgentResponsesMultipartRequest at($offset)
 */
class AgentResponsesMultipartRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert AgentResponsesMultipartRequest $value
     * @psalm-param AgentResponsesMultipartRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesMultipartRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesMultipartRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesMultipartRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesMultipartRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesMultipartRequest $data */
                $data = AgentResponsesMultipartRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
