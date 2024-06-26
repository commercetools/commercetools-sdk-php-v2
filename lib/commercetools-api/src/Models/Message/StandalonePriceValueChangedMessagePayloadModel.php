<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceValueChangedMessagePayloadModel extends JsonObjectModel implements StandalonePriceValueChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceValueChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?TypedMoney
     */
    protected $value;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?TypedMoney
     */
    protected $oldValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $value = null,
        ?bool $staged = null,
        ?TypedMoney $oldValue = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->staged = $staged;
        $this->oldValue = $oldValue;
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
     * <p>The new value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Whether the new value was applied to the current or the staged representation of the StandalonePrice. Staged changes are stored on the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>The old value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * Present on Messages created after 3 February 2023. Optional for backwards compatibility.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getOldValue()
    {
        if (is_null($this->oldValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->oldValue = $className::of($data);
        }

        return $this->oldValue;
    }


    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?TypedMoney $oldValue
     */
    public function setOldValue(?TypedMoney $oldValue): void
    {
        $this->oldValue = $oldValue;
    }
}
