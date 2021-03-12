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
 * @extends MapperSequence<SetLocalizedDescriptionAction>
 * @method SetLocalizedDescriptionAction current()
 * @method SetLocalizedDescriptionAction at($offset)
 */
class SetLocalizedDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLocalizedDescriptionAction $value
     * @psalm-param SetLocalizedDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLocalizedDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLocalizedDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLocalizedDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLocalizedDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLocalizedDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
