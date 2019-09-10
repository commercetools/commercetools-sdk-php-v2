<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionChangeDestinationAction>
 *
 * @method ExtensionChangeDestinationAction current()
 * @method ExtensionChangeDestinationAction at($offset)
 */
class ExtensionChangeDestinationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionChangeDestinationAction $value
     * @psalm-param ExtensionChangeDestinationAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionChangeDestinationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionChangeDestinationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionChangeDestinationAction
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionChangeDestinationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionChangeDestinationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
