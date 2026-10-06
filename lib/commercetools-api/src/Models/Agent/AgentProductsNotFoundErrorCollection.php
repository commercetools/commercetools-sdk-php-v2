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
 * @extends ErrorObjectCollection<AgentProductsNotFoundError>
 * @method AgentProductsNotFoundError current()
 * @method AgentProductsNotFoundError end()
 * @method AgentProductsNotFoundError at($offset)
 */
class AgentProductsNotFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentProductsNotFoundError $value
     * @psalm-param AgentProductsNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentProductsNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentProductsNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentProductsNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentProductsNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentProductsNotFoundError $data */
                $data = AgentProductsNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
