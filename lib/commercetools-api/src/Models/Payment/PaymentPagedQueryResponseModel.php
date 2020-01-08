<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentPagedQueryResponseModel extends JsonObjectModel implements PaymentPagedQueryResponse
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?PaymentCollection
     */
    protected $results;

    public function __construct(
        int $limit = null,
        int $count = null,
        int $total = null,
        int $offset = null,
        PaymentCollection $results = null
    ) {
        $this->limit = $limit;
        $this->count = $count;
        $this->total = $total;
        $this->offset = $offset;
        $this->results = $results;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PaymentPagedQueryResponse::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PaymentPagedQueryResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PaymentPagedQueryResponse::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PaymentPagedQueryResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|PaymentCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PaymentPagedQueryResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = PaymentCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setResults(?PaymentCollection $results): void
    {
        $this->results = $results;
    }
}
