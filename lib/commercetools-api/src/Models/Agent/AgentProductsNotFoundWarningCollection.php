<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends WarningObjectCollection<AgentProductsNotFoundWarning>
 * @method AgentProductsNotFoundWarning current()
 * @method AgentProductsNotFoundWarning end()
 * @method AgentProductsNotFoundWarning at($offset)
 */
class AgentProductsNotFoundWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert AgentProductsNotFoundWarning $value
     * @psalm-param AgentProductsNotFoundWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentProductsNotFoundWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentProductsNotFoundWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentProductsNotFoundWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentProductsNotFoundWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentProductsNotFoundWarning $data */
                $data = AgentProductsNotFoundWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
