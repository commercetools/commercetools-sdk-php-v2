<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ClassificationShippingRateInputDraft>
 *
 * @method ClassificationShippingRateInputDraft current()
 * @method ClassificationShippingRateInputDraft at($offset)
 */
class ClassificationShippingRateInputDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ClassificationShippingRateInputDraft $value
     * @psalm-param ClassificationShippingRateInputDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ClassificationShippingRateInputDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ClassificationShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ClassificationShippingRateInputDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ClassificationShippingRateInputDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ClassificationShippingRateInputDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
