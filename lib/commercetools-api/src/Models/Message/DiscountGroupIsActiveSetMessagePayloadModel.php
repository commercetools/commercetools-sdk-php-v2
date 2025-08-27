<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountGroupIsActiveSetMessagePayloadModel extends JsonObjectModel implements DiscountGroupIsActiveSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DiscountGroupIsActiveSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?bool
     */
    protected $isActive;

    /**
     *
     * @var ?bool
     */
    protected $oldIsActive;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isActive = null,
        ?bool $oldIsActive = null,
        ?string $type = null
    ) {
        $this->isActive = $isActive;
        $this->oldIsActive = $oldIsActive;
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
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *
     *
     * @return null|bool
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    /**
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *
     *
     * @return null|bool
     */
    public function getOldIsActive()
    {
        if (is_null($this->oldIsActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_OLD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->oldIsActive = (bool) $data;
        }

        return $this->oldIsActive;
    }


    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @param ?bool $oldIsActive
     */
    public function setOldIsActive(?bool $oldIsActive): void
    {
        $this->oldIsActive = $oldIsActive;
    }
}
