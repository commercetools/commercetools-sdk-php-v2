<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomObjectDraft>
 * @method CustomObjectDraft current()
 * @method CustomObjectDraft at($offset)
 */
class CustomObjectDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomObjectDraft $value
     * @psalm-param CustomObjectDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObjectDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObjectDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CustomObjectDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomObjectDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
