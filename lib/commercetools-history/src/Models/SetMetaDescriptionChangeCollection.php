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
 * @extends MapperSequence<SetMetaDescriptionChange>
 * @method SetMetaDescriptionChange current()
 * @method SetMetaDescriptionChange at($offset)
 */
class SetMetaDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMetaDescriptionChange $value
     * @psalm-param SetMetaDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMetaDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMetaDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
