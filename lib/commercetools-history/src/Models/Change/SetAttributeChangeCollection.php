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
 * @extends MapperSequence<SetAttributeChange>
 * @method SetAttributeChange current()
 * @method SetAttributeChange at($offset)
 */
class SetAttributeChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAttributeChange $value
     * @psalm-param SetAttributeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAttributeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAttributeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAttributeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAttributeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAttributeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
