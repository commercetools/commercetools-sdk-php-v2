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
 * @extends MapperSequence<SetImageLabelAction>
 * @method SetImageLabelAction current()
 * @method SetImageLabelAction at($offset)
 */
class SetImageLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetImageLabelAction $value
     * @psalm-param SetImageLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetImageLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetImageLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetImageLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetImageLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetImageLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
