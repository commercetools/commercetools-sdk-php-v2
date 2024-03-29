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
 * @extends MapperSequence<MyQuoteRequestUpdate>
 * @method MyQuoteRequestUpdate current()
 * @method MyQuoteRequestUpdate end()
 * @method MyQuoteRequestUpdate at($offset)
 */
class MyQuoteRequestUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyQuoteRequestUpdate $value
     * @psalm-param MyQuoteRequestUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyQuoteRequestUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyQuoteRequestUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyQuoteRequestUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyQuoteRequestUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyQuoteRequestUpdate $data */
                $data = MyQuoteRequestUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
