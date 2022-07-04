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
 * @extends MapperSequence<QuoteRequestUpdate>
 * @method QuoteRequestUpdate current()
 * @method QuoteRequestUpdate end()
 * @method QuoteRequestUpdate at($offset)
 */
class QuoteRequestUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert QuoteRequestUpdate $value
     * @psalm-param QuoteRequestUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestUpdate $data */
                $data = QuoteRequestUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
