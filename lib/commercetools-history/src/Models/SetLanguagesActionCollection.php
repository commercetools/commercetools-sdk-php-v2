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
 * @extends MapperSequence<SetLanguagesAction>
 * @method SetLanguagesAction current()
 * @method SetLanguagesAction at($offset)
 */
class SetLanguagesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLanguagesAction $value
     * @psalm-param SetLanguagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLanguagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLanguagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLanguagesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLanguagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLanguagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
