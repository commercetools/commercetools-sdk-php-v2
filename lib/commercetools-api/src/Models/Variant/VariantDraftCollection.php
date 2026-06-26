<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantDraft>
 * @method VariantDraft current()
 * @method VariantDraft end()
 * @method VariantDraft at($offset)
 */
class VariantDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantDraft $value
     * @psalm-param VariantDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantDraft $data */
                $data = VariantDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
