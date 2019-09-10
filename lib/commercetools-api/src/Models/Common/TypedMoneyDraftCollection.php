<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypedMoneyDraft>
 * @method TypedMoneyDraft current()
 * @method TypedMoneyDraft at($offset)
 */
class TypedMoneyDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TypedMoneyDraft $value
     * @psalm-param TypedMoneyDraft|stdClass $value
     * @return TypedMoneyDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TypedMoneyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypedMoneyDraft
     */
    protected function mapper()
    {
        return function(int $index): ?TypedMoneyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypedMoneyDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}