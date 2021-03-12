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
 * @extends MapperSequence<SetDeleteDaysAfterLastModificationAction>
 * @method SetDeleteDaysAfterLastModificationAction current()
 * @method SetDeleteDaysAfterLastModificationAction at($offset)
 */
class SetDeleteDaysAfterLastModificationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDeleteDaysAfterLastModificationAction $value
     * @psalm-param SetDeleteDaysAfterLastModificationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeleteDaysAfterLastModificationAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
