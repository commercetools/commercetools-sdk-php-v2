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
 * @extends MapperSequence<SetSlugChange>
 * @method SetSlugChange current()
 * @method SetSlugChange at($offset)
 */
class SetSlugChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSlugChange $value
     * @psalm-param SetSlugChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSlugChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSlugChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSlugChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetSlugChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSlugChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
