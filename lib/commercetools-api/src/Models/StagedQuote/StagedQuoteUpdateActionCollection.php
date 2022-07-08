<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of StagedQuoteUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method StagedQuoteUpdateAction current()
 * @method StagedQuoteUpdateAction end()
 * @method StagedQuoteUpdateAction at($offset)
 */
class StagedQuoteUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteUpdateAction) {
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
        return function (?int $index): ?StagedQuoteUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = StagedQuoteUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
