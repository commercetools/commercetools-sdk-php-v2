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
 * @extends MapperSequence<TaxPortionDraft>
 * @method TaxPortionDraft current()
 * @method TaxPortionDraft end()
 * @method TaxPortionDraft at($offset)
 */
class TaxPortionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxPortionDraft $value
     * @psalm-param TaxPortionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxPortionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxPortionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxPortionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxPortionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxPortionDraft $data */
                $data = TaxPortionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
