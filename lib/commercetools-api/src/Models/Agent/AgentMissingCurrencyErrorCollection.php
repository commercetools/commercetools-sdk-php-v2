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
 * @extends ErrorObjectCollection<AgentMissingCurrencyError>
 * @method AgentMissingCurrencyError current()
 * @method AgentMissingCurrencyError end()
 * @method AgentMissingCurrencyError at($offset)
 */
class AgentMissingCurrencyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentMissingCurrencyError $value
     * @psalm-param AgentMissingCurrencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentMissingCurrencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentMissingCurrencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentMissingCurrencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentMissingCurrencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentMissingCurrencyError $data */
                $data = AgentMissingCurrencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
