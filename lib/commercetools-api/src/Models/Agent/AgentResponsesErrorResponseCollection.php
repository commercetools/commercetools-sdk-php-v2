<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorResponseCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorResponseCollection<AgentResponsesErrorResponse>
 * @method AgentResponsesErrorResponse current()
 * @method AgentResponsesErrorResponse end()
 * @method AgentResponsesErrorResponse at($offset)
 */
class AgentResponsesErrorResponseCollection extends ErrorResponseCollection
{
    /**
     * @psalm-assert AgentResponsesErrorResponse $value
     * @psalm-param AgentResponsesErrorResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesErrorResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesErrorResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesErrorResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesErrorResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesErrorResponse $data */
                $data = AgentResponsesErrorResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
