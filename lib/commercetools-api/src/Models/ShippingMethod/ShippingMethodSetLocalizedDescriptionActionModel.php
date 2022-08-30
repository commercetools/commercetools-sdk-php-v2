<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

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
final class ShippingMethodSetLocalizedDescriptionActionModel extends JsonObjectModel implements ShippingMethodSetLocalizedDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'setLocalizedDescription';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?LocalizedString
     */
    protected $localizedDescription;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $localizedDescription = null,
        ?string $action = null
    ) {
        $this->localizedDescription = $localizedDescription;
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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getLocalizedDescription()
    {
        if (is_null($this->localizedDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCALIZED_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->localizedDescription = LocalizedStringModel::of($data);
        }

        return $this->localizedDescription;
    }


    /**
     * @param ?LocalizedString $localizedDescription
     */
    public function setLocalizedDescription(?LocalizedString $localizedDescription): void
    {
        $this->localizedDescription = $localizedDescription;
    }
}
