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
 * @extends MapperSequence<ExtensionUpdateAction>
 *
 * @method ExtensionUpdateAction current()
 * @method ExtensionUpdateAction at($offset)
 */
class ExtensionUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionUpdateAction $value
     * @psalm-param ExtensionUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
