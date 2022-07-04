<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<QuoteUpdate>
 * @method QuoteUpdate current()
 * @method QuoteUpdate end()
 * @method QuoteUpdate at($offset)
 */
class QuoteUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert QuoteUpdate $value
     * @psalm-param QuoteUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteUpdate $data */
                $data = QuoteUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
