<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeDraft>
 * @method TypeDraft current()
 * @method TypeDraft at($offset)
 */
class TypeDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeDraft $value
     * @psalm-param TypeDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeDraft
     */
    protected function mapper()
    {
        return function (int $index): ?TypeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeDraft $data */
                $data = TypeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
