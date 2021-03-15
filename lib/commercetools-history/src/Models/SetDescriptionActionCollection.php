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
 * @extends MapperSequence<SetDescriptionAction>
 * @method SetDescriptionAction current()
 * @method SetDescriptionAction at($offset)
 */
class SetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDescriptionAction $value
     * @psalm-param SetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
