<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeMasterVariantAction>
 * @method ChangeMasterVariantAction current()
 * @method ChangeMasterVariantAction at($offset)
 */
class ChangeMasterVariantActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeMasterVariantAction $value
     * @psalm-param ChangeMasterVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeMasterVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeMasterVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeMasterVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeMasterVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeMasterVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
