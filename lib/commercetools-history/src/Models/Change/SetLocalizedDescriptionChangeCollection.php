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
 * @extends MapperSequence<SetLocalizedDescriptionChange>
 * @method SetLocalizedDescriptionChange current()
 * @method SetLocalizedDescriptionChange at($offset)
 */
class SetLocalizedDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLocalizedDescriptionChange $value
     * @psalm-param SetLocalizedDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLocalizedDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLocalizedDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLocalizedDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLocalizedDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLocalizedDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
