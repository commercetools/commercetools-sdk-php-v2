<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodInfoNameSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoNameSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoNameSet';
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
     * @var ?LocalizedString
     */
    protected $oldName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?LocalizedString $oldName = null,
        ?string $type = null
    ) {
        $this->name = $name;
        $this->oldName = $oldName;
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
     * <p>Name of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoNameAction">Set MethodInfo Name</a> update action.</p>
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
     * <p>Name of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoNameAction">Set MethodInfo Name</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getOldName()
    {
        if (is_null($this->oldName)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->oldName = LocalizedStringModel::of($data);
        }

        return $this->oldName;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $oldName
     */
    public function setOldName(?LocalizedString $oldName): void
    {
        $this->oldName = $oldName;
    }
}
