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
final class StandalonePriceActiveChangedMessagePayloadModel extends JsonObjectModel implements StandalonePriceActiveChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceActiveChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?bool
     */
    protected $active;

    /**
     *
     * @var ?bool
     */
    protected $oldActive;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $active = null,
        ?bool $oldActive = null,
        ?string $type = null
    ) {
        $this->active = $active;
        $this->oldActive = $oldActive;
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
     * <p>Value of the <code>active</code> field of the StandalonePrice after the <a href="ctp:api:type:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *
     *
     * @return null|bool
     */
    public function getActive()
    {
        if (is_null($this->active)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->active = (bool) $data;
        }

        return $this->active;
    }

    /**
     * <p>Value of the <code>active</code> field of the StandalonePrice before the <a href="ctp:api:type:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *
     *
     * @return null|bool
     */
    public function getOldActive()
    {
        if (is_null($this->oldActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_OLD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->oldActive = (bool) $data;
        }

        return $this->oldActive;
    }


    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @param ?bool $oldActive
     */
    public function setOldActive(?bool $oldActive): void
    {
        $this->oldActive = $oldActive;
    }
}
