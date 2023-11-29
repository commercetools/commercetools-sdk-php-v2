<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyQuoteUpdate>
 */
final class MyQuoteUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?MyQuoteUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the <a href="ctp:api:type:Quote">Quote</a> to which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the <a href="ctp:api:type:Quote">Quote</a>.</p>
     *

     * @return null|MyQuoteUpdateActionCollection
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
     * @param ?MyQuoteUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?MyQuoteUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): MyQuoteUpdate
    {
        return new MyQuoteUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): MyQuoteUpdateBuilder
    {
        return new self();
    }
}
