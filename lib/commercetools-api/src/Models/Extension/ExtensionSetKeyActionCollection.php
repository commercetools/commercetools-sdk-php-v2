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
 * @extends MapperSequence<ExtensionSetKeyAction>
 * @method ExtensionSetKeyAction current()
 * @method ExtensionSetKeyAction at($offset)
 */
class ExtensionSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionSetKeyAction $value
     * @psalm-param ExtensionSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
