<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<UpdateAction>
 * @method UpdateAction current()
 * @method UpdateAction at($offset)
 */
class UpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert UpdateAction $value
     * @psalm-param UpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof UpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UpdateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?UpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UpdateAction $data */
                $data = UpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
