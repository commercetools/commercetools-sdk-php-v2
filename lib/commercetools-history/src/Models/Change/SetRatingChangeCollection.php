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
 * @extends MapperSequence<SetRatingChange>
 * @method SetRatingChange current()
 * @method SetRatingChange at($offset)
 */
class SetRatingChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetRatingChange $value
     * @psalm-param SetRatingChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetRatingChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetRatingChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetRatingChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetRatingChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetRatingChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
