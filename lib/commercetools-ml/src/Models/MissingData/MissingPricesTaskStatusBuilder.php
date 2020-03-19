<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<MissingPricesTaskStatus>
 */
final class MissingPricesTaskStatusBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?DateTimeImmutable
     */
    private $expires;

    /**
     * @var null|MissingPricesPagedQueryResult|MissingPricesPagedQueryResultBuilder
     */
    private $result;

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>The expiry date of the result. You cannot access the result after the expiry date. Default: 1 day after the result first becomes available. This is only available when the TaskStatus state is SUCCESS.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * <p>The response to an asynchronous request. The type depends on the request initiated. Only populated when the status is <code>SUCCESS</code>.</p>
     *
     * @return null|MissingPricesPagedQueryResult
     */
    public function getResult()
    {
        return $this->result instanceof MissingPricesPagedQueryResultBuilder ? $this->result->build() : $this->result;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExpires(?DateTimeImmutable $expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResult(?MissingPricesPagedQueryResult $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResultBuilder(?MissingPricesPagedQueryResultBuilder $result)
    {
        $this->result = $result;

        return $this;
    }

    public function build(): MissingPricesTaskStatus
    {
        return new MissingPricesTaskStatusModel(
            $this->state,
            $this->expires,
            $this->result instanceof MissingPricesPagedQueryResultBuilder ? $this->result->build() : $this->result
        );
    }

    public static function of(): MissingPricesTaskStatusBuilder
    {
        return new self();
    }
}
