<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\MoneyCollection;

/**
 * @internal
 */
final class ChangeValueAbsoluteChangeValueModel extends JsonObjectModel implements ChangeValueAbsoluteChangeValue
{

    public const DISCRIMINATOR_VALUE = 'absolute';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?MoneyCollection
     */
    protected $money;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MoneyCollection $money = null,
        ?string $type = null
    ) {
        $this->money = $money;
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
     * <p>Money values in different currencies.</p>
     *
     *
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = MoneyCollection::fromArray($data);
        }

        return $this->money;
    }


    /**
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void
    {
        $this->money = $money;
    }



}
