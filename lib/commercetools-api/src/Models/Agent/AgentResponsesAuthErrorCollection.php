<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\AuthErrorResponseCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AuthErrorResponseCollection<AgentResponsesAuthError>
 * @method AgentResponsesAuthError current()
 * @method AgentResponsesAuthError end()
 * @method AgentResponsesAuthError at($offset)
 */
class AgentResponsesAuthErrorCollection extends AuthErrorResponseCollection
{
    /**
     * @psalm-assert AgentResponsesAuthError $value
     * @psalm-param AgentResponsesAuthError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesAuthErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesAuthError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesAuthError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesAuthError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesAuthError $data */
                $data = AgentResponsesAuthErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
