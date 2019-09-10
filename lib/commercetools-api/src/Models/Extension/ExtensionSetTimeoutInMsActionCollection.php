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
 * @extends MapperSequence<ExtensionSetTimeoutInMsAction>
 *
 * @method ExtensionSetTimeoutInMsAction current()
 * @method ExtensionSetTimeoutInMsAction at($offset)
 */
class ExtensionSetTimeoutInMsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionSetTimeoutInMsAction $value
     * @psalm-param ExtensionSetTimeoutInMsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionSetTimeoutInMsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionSetTimeoutInMsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionSetTimeoutInMsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionSetTimeoutInMsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionSetTimeoutInMsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
