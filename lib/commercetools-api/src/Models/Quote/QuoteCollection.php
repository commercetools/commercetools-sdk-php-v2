<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Quote>
 * @method Quote current()
 * @method Quote end()
 * @method Quote at($offset)
 */
class QuoteCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Quote $value
     * @psalm-param Quote|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteCollection
     */
    public function add($value)
    {
        if (!$value instanceof Quote) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Quote
     */
    protected function mapper()
    {
        return function (?int $index): ?Quote {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Quote $data */
                $data = QuoteModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
