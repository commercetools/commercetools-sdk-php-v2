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
 * @extends MapperSequence<MyQuoteRequestDraft>
 * @method MyQuoteRequestDraft current()
 * @method MyQuoteRequestDraft end()
 * @method MyQuoteRequestDraft at($offset)
 */
class MyQuoteRequestDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyQuoteRequestDraft $value
     * @psalm-param MyQuoteRequestDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyQuoteRequestDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyQuoteRequestDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyQuoteRequestDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyQuoteRequestDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyQuoteRequestDraft $data */
                $data = MyQuoteRequestDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
