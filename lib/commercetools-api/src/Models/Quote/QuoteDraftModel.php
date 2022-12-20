<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifier;
use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifierModel;
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
final class QuoteDraftModel extends JsonObjectModel implements QuoteDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?StagedQuoteResourceIdentifier
     */
    protected $stagedQuote;

    /**
     *
     * @var ?int
     */
    protected $stagedQuoteVersion;

    /**
     *
     * @var ?bool
     */
    protected $stagedQuoteStateToSent;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?StagedQuoteResourceIdentifier $stagedQuote = null,
        ?int $stagedQuoteVersion = null,
        ?bool $stagedQuoteStateToSent = null,
        ?StateReference $state = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->stagedQuote = $stagedQuote;
        $this->stagedQuoteVersion = $stagedQuoteVersion;
        $this->stagedQuoteStateToSent = $stagedQuoteStateToSent;
        $this->state = $state;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier for the Quote.</p>
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
     * <p>StagedQuote from which the Quote is created.</p>
     *
     *
     * @return null|StagedQuoteResourceIdentifier
     */
    public function getStagedQuote()
    {
        if (is_null($this->stagedQuote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->stagedQuote = StagedQuoteResourceIdentifierModel::of($data);
        }

        return $this->stagedQuote;
    }

    /**
     * <p>Current version of the StagedQuote.</p>
     *
     *
     * @return null|int
     */
    public function getStagedQuoteVersion()
    {
        if (is_null($this->stagedQuoteVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->stagedQuoteVersion = (int) $data;
        }

        return $this->stagedQuoteVersion;
    }

    /**
     * <p>If <code>true</code>, the <code>stagedQuoteState</code> of the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> will be set to <code>Sent</code>.</p>
     *
     *
     * @return null|bool
     */
    public function getStagedQuoteStateToSent()
    {
        if (is_null($this->stagedQuoteStateToSent)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE_STATE_TO_SENT);
            if (is_null($data)) {
                return null;
            }
            $this->stagedQuoteStateToSent = (bool) $data;
        }

        return $this->stagedQuoteStateToSent;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Quote.
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
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the Quote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> and added to the Quote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> are added to the Quote automatically.</li>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?StagedQuoteResourceIdentifier $stagedQuote
     */
    public function setStagedQuote(?StagedQuoteResourceIdentifier $stagedQuote): void
    {
        $this->stagedQuote = $stagedQuote;
    }

    /**
     * @param ?int $stagedQuoteVersion
     */
    public function setStagedQuoteVersion(?int $stagedQuoteVersion): void
    {
        $this->stagedQuoteVersion = $stagedQuoteVersion;
    }

    /**
     * @param ?bool $stagedQuoteStateToSent
     */
    public function setStagedQuoteStateToSent(?bool $stagedQuoteStateToSent): void
    {
        $this->stagedQuoteStateToSent = $stagedQuoteStateToSent;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
