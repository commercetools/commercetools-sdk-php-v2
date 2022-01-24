<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelResourceIdentifier>
 */
final class ChannelResourceIdentifierBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Channel">Channel</a>. Either <code>id</code> or <code>key</code> is required.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Unique key of the referenced <a href="ctp:api:type:Channel">Channel</a>. Either <code>id</code> or <code>key</code> is required.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ChannelResourceIdentifier
    {
        return new ChannelResourceIdentifierModel(
            $this->id,
            $this->key
        );
    }

    public static function of(): ChannelResourceIdentifierBuilder
    {
        return new self();
    }
}
