<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceActiveChangedMessagePayload>
 */
final class StandalonePriceActiveChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $active;

    /**

     * @var ?bool
     */
    private $oldActive;

    /**
     * <p>Value of the <code>active</code> field of the StandalonePrice after the <a href="ctp:api:type:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *

     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <p>Value of the <code>active</code> field of the StandalonePrice before the <a href="ctp:api:type:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldActive()
    {
        return $this->oldActive;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @param ?bool $oldActive
     * @return $this
     */
    public function withOldActive(?bool $oldActive)
    {
        $this->oldActive = $oldActive;

        return $this;
    }


    public function build(): StandalonePriceActiveChangedMessagePayload
    {
        return new StandalonePriceActiveChangedMessagePayloadModel(
            $this->active,
            $this->oldActive
        );
    }

    public static function of(): StandalonePriceActiveChangedMessagePayloadBuilder
    {
        return new self();
    }
}
