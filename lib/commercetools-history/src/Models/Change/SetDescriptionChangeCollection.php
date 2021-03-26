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
 * @extends MapperSequence<SetDescriptionChange>
 * @method SetDescriptionChange current()
 * @method SetDescriptionChange at($offset)
 */
class SetDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDescriptionChange $value
     * @psalm-param SetDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
