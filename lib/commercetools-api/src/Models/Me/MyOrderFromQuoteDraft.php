<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyOrderFromQuoteDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_QUOTE_STATE_TO_ACCEPTED = 'quoteStateToAccepted';

    /**
     * <p>Unique identifier of the Quote from which the Order is created.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:quote">Quote</a> from which the Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Set to <code>true</code>, if the <code>quoteState</code> of the referenced <a href="ctp:api:type:quote">Quote</a> should be set to <code>Accepted</code>.</p>
     *

     * @return null|bool
     */
    public function getQuoteStateToAccepted();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?bool $quoteStateToAccepted
     */
    public function setQuoteStateToAccepted(?bool $quoteStateToAccepted): void;
}
