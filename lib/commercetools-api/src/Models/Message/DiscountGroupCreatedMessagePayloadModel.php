<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountGroup\DiscountGroup;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountGroupCreatedMessagePayloadModel extends JsonObjectModel implements DiscountGroupCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DiscountGroupCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DiscountGroup
     */
    protected $discountGroup;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountGroup $discountGroup = null,
        ?string $type = null
    ) {
        $this->discountGroup = $discountGroup;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The DiscountGroup that was created.</p>
     *
     *
     * @return null|DiscountGroup
     */
    public function getDiscountGroup()
    {
        if (is_null($this->discountGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->discountGroup = DiscountGroupModel::of($data);
        }

        return $this->discountGroup;
    }


    /**
     * @param ?DiscountGroup $discountGroup
     */
    public function setDiscountGroup(?DiscountGroup $discountGroup): void
    {
        $this->discountGroup = $discountGroup;
    }
}
