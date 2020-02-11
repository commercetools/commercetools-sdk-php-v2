<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StoreDraft>
 * @method StoreDraft current()
 * @method StoreDraft at($offset)
 */
class StoreDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreDraft $value
     * @psalm-param StoreDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreDraft
     */
    protected function mapper()
    {
        return function (int $index): ?StoreDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
