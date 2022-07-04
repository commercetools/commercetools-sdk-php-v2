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
 * @extends MapperSequence<QuoteRequestDraft>
 * @method QuoteRequestDraft current()
 * @method QuoteRequestDraft end()
 * @method QuoteRequestDraft at($offset)
 */
class QuoteRequestDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert QuoteRequestDraft $value
     * @psalm-param QuoteRequestDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestDraft $data */
                $data = QuoteRequestDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
