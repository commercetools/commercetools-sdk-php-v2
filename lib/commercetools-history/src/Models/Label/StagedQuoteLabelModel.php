<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceModel;

/**
 * @internal
 */
final class StagedQuoteLabelModel extends JsonObjectModel implements StagedQuoteLabel
{

    public const DISCRIMINATOR_VALUE = 'StagedQuoteLabel';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?Reference
     */
    protected $customer;

    /**
     *
     * @var ?Reference
     */
    protected $quoteRequest;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?Reference $customer = null,
        ?Reference $quoteRequest = null,
        ?string $type = null
    ) {
        $this->key = $key;
        $this->customer = $customer;
        $this->quoteRequest = $quoteRequest;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>User-defined unique identifier of the Staged Quote.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the Quote.</p>
     *
     *
     * @return null|Reference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = ReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Quote Request related to the Staged Quote.</p>
     *
     *
     * @return null|Reference
     */
    public function getQuoteRequest()
    {
        if (is_null($this->quoteRequest)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST);
            if (is_null($data)) {
                return null;
            }

            $this->quoteRequest = ReferenceModel::of($data);
        }

        return $this->quoteRequest;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?Reference $quoteRequest
     */
    public function setQuoteRequest(?Reference $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }



}
