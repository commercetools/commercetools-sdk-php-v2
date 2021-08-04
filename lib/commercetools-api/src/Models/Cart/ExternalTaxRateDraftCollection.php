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
 * @extends MapperSequence<ExternalTaxRateDraft>
 * @method ExternalTaxRateDraft current()
 * @method ExternalTaxRateDraft end()
 * @method ExternalTaxRateDraft at($offset)
 */
class ExternalTaxRateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ExternalTaxRateDraft $value
     * @psalm-param ExternalTaxRateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExternalTaxRateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExternalTaxRateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExternalTaxRateDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ExternalTaxRateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExternalTaxRateDraft $data */
                $data = ExternalTaxRateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
