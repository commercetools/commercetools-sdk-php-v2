<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyOrderFromQuoteDraftModel extends JsonObjectModel implements MyOrderFromQuoteDraft
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?bool
     */
    protected $quoteStateToAccepted;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?bool $quoteStateToAccepted = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->quoteStateToAccepted = $quoteStateToAccepted;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Quote">Quote</a> from which the Order is created.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current <code>version</code> of the <a href="ctp:api:type:Quote">Quote</a> from which the Order is created.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Set to <code>true</code>, if the <code>quoteState</code> of the referenced <a href="ctp:api:type:Quote">Quote</a> should be set to <code>Accepted</code>.</p>
     *
     *
     * @return null|bool
     */
    public function getQuoteStateToAccepted()
    {
        if (is_null($this->quoteStateToAccepted)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_QUOTE_STATE_TO_ACCEPTED);
            if (is_null($data)) {
                return null;
            }
            $this->quoteStateToAccepted = (bool) $data;
        }

        return $this->quoteStateToAccepted;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?bool $quoteStateToAccepted
     */
    public function setQuoteStateToAccepted(?bool $quoteStateToAccepted): void
    {
        $this->quoteStateToAccepted = $quoteStateToAccepted;
    }
}
