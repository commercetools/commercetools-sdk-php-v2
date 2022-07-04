<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of QuoteRequestUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method QuoteRequestUpdateAction current()
 * @method QuoteRequestUpdateAction end()
 * @method QuoteRequestUpdateAction at($offset)
 */
class QuoteRequestUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestUpdateAction) {
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
        return function (?int $index): ?QuoteRequestUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = QuoteRequestUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
