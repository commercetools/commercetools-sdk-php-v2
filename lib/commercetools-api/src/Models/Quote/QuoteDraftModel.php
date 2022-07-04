<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifier;
use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifierModel;
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
     * @var ?StagedQuoteResourceIdentifier
     */
    protected $stagedQuote;

    /**
     * @var ?int
     */
    protected $stagedQuoteVersion;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedQuoteResourceIdentifier $stagedQuote = null,
        ?int $stagedQuoteVersion = null,
        ?string $key = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->stagedQuote = $stagedQuote;
        $this->stagedQuoteVersion = $stagedQuoteVersion;
        $this->key = $key;
        $this->custom = $custom;
    }

    /**
     * <p>The StagedQuote from which this Quote is created.</p>
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
     * <p>User-defined unique identifier for the Quote.</p>
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
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the Quote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> and added to the Quote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> are added to the Quote automatically.</li>
     * </ul>
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
}
