<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<QuoteRequest>
 * @method QuoteRequest current()
 * @method QuoteRequest end()
 * @method QuoteRequest at($offset)
 */
class QuoteRequestCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert QuoteRequest $value
     * @psalm-param QuoteRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequest $data */
                $data = QuoteRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
