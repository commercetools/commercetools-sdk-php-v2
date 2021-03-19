<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetDeleteDaysAfterLastModificationChange>
 * @method SetDeleteDaysAfterLastModificationChange current()
 * @method SetDeleteDaysAfterLastModificationChange at($offset)
 */
class SetDeleteDaysAfterLastModificationChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDeleteDaysAfterLastModificationChange $value
     * @psalm-param SetDeleteDaysAfterLastModificationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeleteDaysAfterLastModificationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeleteDaysAfterLastModificationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeleteDaysAfterLastModificationChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDeleteDaysAfterLastModificationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDeleteDaysAfterLastModificationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
