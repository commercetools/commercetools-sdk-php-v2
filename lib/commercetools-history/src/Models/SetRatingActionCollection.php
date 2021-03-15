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
 * @extends MapperSequence<SetRatingAction>
 * @method SetRatingAction current()
 * @method SetRatingAction at($offset)
 */
class SetRatingActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetRatingAction $value
     * @psalm-param SetRatingAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetRatingActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetRatingAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetRatingAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetRatingAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetRatingActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
