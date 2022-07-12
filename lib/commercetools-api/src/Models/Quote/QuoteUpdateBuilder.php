<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteUpdate>
 */
final class QuoteUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?QuoteUpdateActionCollection
     */
    private $actions;

    /**

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**

     * @return null|QuoteUpdateActionCollection
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
     * @param ?QuoteUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?QuoteUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): QuoteUpdate
    {
        return new QuoteUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): QuoteUpdateBuilder
    {
        return new self();
    }
}
