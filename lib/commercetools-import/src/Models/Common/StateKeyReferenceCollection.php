<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<StateKeyReference>
 * @method StateKeyReference current()
 * @method StateKeyReference at($offset)
 */
class StateKeyReferenceCollection extends KeyReferenceCollection
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
                /** @var StateKeyReference $data */
                $data = StateKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
