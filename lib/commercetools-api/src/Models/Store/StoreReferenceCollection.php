<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<StoreReference>
 * @method StoreReference current()
 * @method StoreReference end()
 * @method StoreReference at($offset)
 */
class StoreReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert StoreReference $value
     * @psalm-param StoreReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreReference
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreReference $data */
                $data = StoreReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
