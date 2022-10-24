<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestResourceIdentifier;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestResourceIdentifierModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteDraftModel extends JsonObjectModel implements StagedQuoteDraft
{
    /**
     *
     * @var ?QuoteRequestResourceIdentifier
     */
    protected $quoteRequest;

    /**
     *
     * @var ?int
     */
    protected $quoteRequestVersion;

    /**
     *
     * @var ?bool
     */
    protected $quoteRequestStateToAccepted;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?StateReference
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?QuoteRequestResourceIdentifier $quoteRequest = null,
        ?int $quoteRequestVersion = null,
        ?bool $quoteRequestStateToAccepted = null,
        ?string $key = null,
        ?CustomFieldsDraft $custom = null,
        ?StateReference $state = null
    ) {
        $this->quoteRequest = $quoteRequest;
        $this->quoteRequestVersion = $quoteRequestVersion;
        $this->quoteRequestStateToAccepted = $quoteRequestStateToAccepted;
        $this->key = $key;
        $this->custom = $custom;
        $this->state = $state;
    }

    /**
     * <p>QuoteRequest from which the StagedQuote is created.</p>
     *
     *
     * @return null|QuoteRequestResourceIdentifier
     */
    public function getQuoteRequest()
    {
        if (is_null($this->quoteRequest)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST);
            if (is_null($data)) {
                return null;
            }

            $this->quoteRequest = QuoteRequestResourceIdentifierModel::of($data);
        }

        return $this->quoteRequest;
    }

    /**
     * <p>Current version of the QuoteRequest.</p>
     *
     *
     * @return null|int
     */
    public function getQuoteRequestVersion()
    {
        if (is_null($this->quoteRequestVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->quoteRequestVersion = (int) $data;
        }

        return $this->quoteRequestVersion;
    }

    /**
     * <p>If <code>true</code>, the <code>quoteRequestState</code> of the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> will be set to <code>Accepted</code>.</p>
     *
     *
     * @return null|bool
     */
    public function getQuoteRequestStateToAccepted()
    {
        if (is_null($this->quoteRequestStateToAccepted)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST_STATE_TO_ACCEPTED);
            if (is_null($data)) {
                return null;
            }
            $this->quoteRequestStateToAccepted = (bool) $data;
        }

        return $this->quoteRequestStateToAccepted;
    }

    /**
     * <p>User-defined unique identifier for the StagedQuote.</p>
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
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the StagedQuote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> and added to the StagedQuote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> are added to the StagedQuote automatically.</li>
     * </ul>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Staged Quote.
     * This reference can point to a State in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }


    /**
     * @param ?QuoteRequestResourceIdentifier $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestResourceIdentifier $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * @param ?int $quoteRequestVersion
     */
    public function setQuoteRequestVersion(?int $quoteRequestVersion): void
    {
        $this->quoteRequestVersion = $quoteRequestVersion;
    }

    /**
     * @param ?bool $quoteRequestStateToAccepted
     */
    public function setQuoteRequestStateToAccepted(?bool $quoteRequestStateToAccepted): void
    {
        $this->quoteRequestStateToAccepted = $quoteRequestStateToAccepted;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
}
