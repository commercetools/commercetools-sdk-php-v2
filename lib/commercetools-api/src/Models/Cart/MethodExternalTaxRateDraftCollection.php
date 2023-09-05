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
 * @extends MapperSequence<MethodExternalTaxRateDraft>
 * @method MethodExternalTaxRateDraft current()
 * @method MethodExternalTaxRateDraft end()
 * @method MethodExternalTaxRateDraft at($offset)
 */
class MethodExternalTaxRateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MethodExternalTaxRateDraft $value
     * @psalm-param MethodExternalTaxRateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MethodExternalTaxRateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MethodExternalTaxRateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MethodExternalTaxRateDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MethodExternalTaxRateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MethodExternalTaxRateDraft $data */
                $data = MethodExternalTaxRateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
