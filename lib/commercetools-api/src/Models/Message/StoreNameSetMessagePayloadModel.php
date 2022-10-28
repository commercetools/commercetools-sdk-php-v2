<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringCollection;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreNameSetMessagePayloadModel extends JsonObjectModel implements StoreNameSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreNameSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedStringCollection
     */
    protected $nameAllLocales;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?LocalizedStringCollection $nameAllLocales = null,
        ?string $type = null
    ) {
        $this->name = $name;
        $this->nameAllLocales = $nameAllLocales;
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
     * <p>Name of the <a href="ctp:api:type:Store">Store</a> set during the <a href="ctp:api:type:StoreSetNameAction">Set Name</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Names set for the <a href="ctp:api:type:Store">Store</a> in different locales.</p>
     *
     *
     * @return null|LocalizedStringCollection
     */
    public function getNameAllLocales()
    {
        if (is_null($this->nameAllLocales)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NAME_ALL_LOCALES);
            if (is_null($data)) {
                return null;
            }
            $this->nameAllLocales = LocalizedStringCollection::fromArray($data);
        }

        return $this->nameAllLocales;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedStringCollection $nameAllLocales
     */
    public function setNameAllLocales(?LocalizedStringCollection $nameAllLocales): void
    {
        $this->nameAllLocales = $nameAllLocales;
    }
}
