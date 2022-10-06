<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of BusinessUnitDraft
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method BusinessUnitDraft current()
 * @method BusinessUnitDraft end()
 * @method BusinessUnitDraft at($offset)
 */
class BusinessUnitDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = BusinessUnitDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
