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
 * @extends ErrorObjectCollection<AgentMissingCustomerEmailError>
 * @method AgentMissingCustomerEmailError current()
 * @method AgentMissingCustomerEmailError end()
 * @method AgentMissingCustomerEmailError at($offset)
 */
class AgentMissingCustomerEmailErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentMissingCustomerEmailError $value
     * @psalm-param AgentMissingCustomerEmailError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentMissingCustomerEmailErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentMissingCustomerEmailError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentMissingCustomerEmailError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentMissingCustomerEmailError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentMissingCustomerEmailError $data */
                $data = AgentMissingCustomerEmailErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
