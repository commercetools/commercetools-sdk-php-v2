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
final class QuoteLabelModel extends JsonObjectModel implements QuoteLabel
{

    public const DISCRIMINATOR_VALUE = 'QuoteLabel';
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
    protected $stagedQuote;

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
        ?Reference $stagedQuote = null,
        ?Reference $quoteRequest = null,
        ?string $type = null
    ) {
        $this->key = $key;
        $this->customer = $customer;
        $this->stagedQuote = $stagedQuote;
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
     *
     * @return null|Reference
     */
    public function getStagedQuote()
    {
        if (is_null($this->stagedQuote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->stagedQuote = ReferenceModel::of($data);
        }

        return $this->stagedQuote;
    }

    /**
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
     * @param ?Reference $stagedQuote
     */
    public function setStagedQuote(?Reference $stagedQuote): void
    {
        $this->stagedQuote = $stagedQuote;
    }

    /**
     * @param ?Reference $quoteRequest
     */
    public function setQuoteRequest(?Reference $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }



}
