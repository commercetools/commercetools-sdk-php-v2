<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParameterOverride>
 * @method ParameterOverride current()
 * @method ParameterOverride end()
 * @method ParameterOverride at($offset)
 */
class ParameterOverrideCollection extends MapperSequence
{
    /**
     * @psalm-assert ParameterOverride $value
     * @psalm-param ParameterOverride|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParameterOverrideCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParameterOverride) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParameterOverride
     */
    protected function mapper()
    {
        return function (?int $index): ?ParameterOverride {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParameterOverride $data */
                $data = ParameterOverrideModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
