<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyQuoteUpdate>
 * @method MyQuoteUpdate current()
 * @method MyQuoteUpdate end()
 * @method MyQuoteUpdate at($offset)
 */
class MyQuoteUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyQuoteUpdate $value
     * @psalm-param MyQuoteUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyQuoteUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyQuoteUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyQuoteUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyQuoteUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyQuoteUpdate $data */
                $data = MyQuoteUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
