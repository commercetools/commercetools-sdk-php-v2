<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestUpdate>
 */
final class QuoteRequestUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?QuoteRequestUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the <a href="ctp:api:type:QuoteRequest">QuoteRequest</a>.</p>
     *

     * @return null|QuoteRequestUpdateActionCollection
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
     * @param ?QuoteRequestUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?QuoteRequestUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): QuoteRequestUpdate
    {
        return new QuoteRequestUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): QuoteRequestUpdateBuilder
    {
        return new self();
    }
}
