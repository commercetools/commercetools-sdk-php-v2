<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateKeyReference>
 * @method StateKeyReference current()
 * @method StateKeyReference at($offset)
 */
class StateKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert StateKeyReference $value
     * @psalm-param StateKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?StateKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
