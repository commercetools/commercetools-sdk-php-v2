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
 * @extends KeyReferenceCollection<StoreKeyReference>
 * @method StoreKeyReference current()
 * @method StoreKeyReference at($offset)
 */
class StoreKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert StoreKeyReference $value
     * @psalm-param StoreKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreKeyReference $data */
                $data = StoreKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
