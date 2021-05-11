<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxRateDraft>
 * @method TaxRateDraft current()
 * @method TaxRateDraft at($offset)
 */
class TaxRateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxRateDraft $value
     * @psalm-param TaxRateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxRateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxRateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxRateDraft
     */
    protected function mapper()
    {
        return function (int $index): ?TaxRateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxRateDraft $data */
                $data = TaxRateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
