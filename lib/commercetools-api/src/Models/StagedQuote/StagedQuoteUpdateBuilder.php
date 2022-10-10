<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteUpdate>
 */
final class StagedQuoteUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?StagedQuoteUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the <a href="ctp:api:type:StagedQuote">StagedQuote</a> to which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the <a href="ctp:api:type:StagedQuote">StagedQuote</a>.</p>
     *

     * @return null|StagedQuoteUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?StagedQuoteUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?StagedQuoteUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): StagedQuoteUpdate
    {
        return new StagedQuoteUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): StagedQuoteUpdateBuilder
    {
        return new self();
    }
}
