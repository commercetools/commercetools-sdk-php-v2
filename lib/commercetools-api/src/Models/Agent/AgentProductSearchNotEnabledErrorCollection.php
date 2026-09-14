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
 * @extends ErrorObjectCollection<AgentProductSearchNotEnabledError>
 * @method AgentProductSearchNotEnabledError current()
 * @method AgentProductSearchNotEnabledError end()
 * @method AgentProductSearchNotEnabledError at($offset)
 */
class AgentProductSearchNotEnabledErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentProductSearchNotEnabledError $value
     * @psalm-param AgentProductSearchNotEnabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentProductSearchNotEnabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentProductSearchNotEnabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentProductSearchNotEnabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentProductSearchNotEnabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentProductSearchNotEnabledError $data */
                $data = AgentProductSearchNotEnabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
