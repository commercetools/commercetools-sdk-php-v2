<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewSetTargetActionModel extends JsonObjectModel implements ReviewSetTargetAction
{
    public const DISCRIMINATOR_VALUE = 'setTarget';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?mixed
     */
    protected $target;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?JsonObject $target = null,
        ?string $action = null
    ) {
        $this->target = $target;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively. If empty, any existing value will be removed.</p>
     *
     *
     * @return ?mixed
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $this->target = $data;
        }

        return $this->target;
    }

    /**
     * <p>Value to set, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively. If empty, any existing value will be removed.</p>
     *
     * @return null|ProductResourceIdentifier
     */
    public function getTargetAsProductResourceIdentifier()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_TARGET);
        if (is_null($data)) {
            return null;
        }

        return ProductResourceIdentifierModel::of($data);
    }

    /**
     * <p>Value to set, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively. If empty, any existing value will be removed.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getTargetAsChannelResourceIdentifier()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_TARGET);
        if (is_null($data)) {
            return null;
        }

        return ChannelResourceIdentifierModel::of($data);
    }

    /**
     * @param ?JsonObject $target
     */
    public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }
}
