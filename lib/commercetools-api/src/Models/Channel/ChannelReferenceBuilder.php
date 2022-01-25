<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelReference>
 */
final class ChannelReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Channel|ChannelBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Channel.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Channels.</p>
     *
     * @return null|Channel
     */
    public function getObj()
    {
        return $this->obj instanceof ChannelBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?Channel $obj
     * @return $this
     */
    public function withObj(?Channel $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ChannelBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ChannelReference
    {
        return new ChannelReferenceModel(
            $this->id,
            $this->obj instanceof ChannelBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ChannelReferenceBuilder
    {
        return new self();
    }
}
