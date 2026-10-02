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
 * @extends ErrorObjectCollection<AgentQuoteRequestCreationFailedError>
 * @method AgentQuoteRequestCreationFailedError current()
 * @method AgentQuoteRequestCreationFailedError end()
 * @method AgentQuoteRequestCreationFailedError at($offset)
 */
class AgentQuoteRequestCreationFailedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentQuoteRequestCreationFailedError $value
     * @psalm-param AgentQuoteRequestCreationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentQuoteRequestCreationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentQuoteRequestCreationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentQuoteRequestCreationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentQuoteRequestCreationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentQuoteRequestCreationFailedError $data */
                $data = AgentQuoteRequestCreationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
